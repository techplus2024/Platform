// SPDX-License-Identifier: UNLICENSED
pragma solidity >=0.4.22 <0.9.0;

contract CommunityProperties {
    address public owner;
    bool public ratingObligationEnabled;
    uint256 public ratingObligationTimePeriod;
    uint256 public requiredRatingPercentage;

    struct ChangeRequestWithoutMapping {
        address requestor;
        uint256 requestId;
        bool status;
        bool newRatingObligationEnabled;
        uint256 newRatingObligationTimePeriod;
        uint256 newRequiredRatingPercentage;
        uint256 approvalCount;
        uint256 rejectionCount;
        mapping(address => bool) voted;
    }

    mapping(uint256 => ChangeRequestWithoutMapping) public changeRequests;
    uint256 public requestCount;
    uint256 public totalAddressesCount; // Track total addresses in the network
    mapping(address => bool) public registeredAddresses; // Mapping to track registered addresses

    event PropertiesUpdated(bool ratingObligationEnabled, uint256 ratingObligationTimePeriod, uint256 requiredRatingPercentage);
    event ChangeRequestSubmitted(uint256 requestId, address requestor);
    event VoteCasted(uint256 requestId, address voter, bool vote, uint256 approvalCount, uint256 rejectionCount);

    struct VoteData {
        bool vote;
        bool isApproval;
        uint256 requestId;
        uint256 approvalCount;
        uint256 rejectionCount;
        bool status;
    }

    constructor() {
        owner = msg.sender;
        ratingObligationEnabled = true;
        ratingObligationTimePeriod = 0;
        requiredRatingPercentage = 100;
        totalAddressesCount = 0;
    }

    modifier onlyOwner() {
        require(msg.sender == owner, "Not the owner");
        _;
    }

    modifier notVoted(uint256 requestId) {
        ChangeRequestWithoutMapping storage currentRequest = changeRequests[requestId];
        require(!currentRequest.voted[msg.sender], "You have already voted");
        _;
    }

    modifier onlyRegistered() {
        require(registeredAddresses[msg.sender], "Address is not registered");
        _;
    }

    function registerAddress(address addr) external onlyOwner {
        require(!registeredAddresses[addr], "Address is already registered");
        registeredAddresses[addr] = true;
        totalAddressesCount++;
    }

    function unregisterAddress(address addr) external onlyOwner {
        require(registeredAddresses[addr], "Address is not registered");
        registeredAddresses[addr] = false;
        totalAddressesCount--;
    }

    function updateProperties(bool _ratingObligationEnabled, uint256 _ratingObligationTimePeriod, uint256 _requiredRatingPercentage) external onlyOwner {
        ratingObligationEnabled = _ratingObligationEnabled;
        ratingObligationTimePeriod = _ratingObligationTimePeriod;
        requiredRatingPercentage = _requiredRatingPercentage;

        emit PropertiesUpdated(_ratingObligationEnabled, _ratingObligationTimePeriod, _requiredRatingPercentage);
    }

    function submitChangeRequest(bool _newRatingObligationEnabled, uint256 _newRatingObligationTimePeriod, uint256 _newRequiredRatingPercentage) external onlyRegistered {
        require(!changeRequests[requestCount].voted[msg.sender], "Address has already submitted a request");

        requestCount++;
        ChangeRequestWithoutMapping storage newRequest = changeRequests[requestCount];
        newRequest.requestor = msg.sender;
        newRequest.requestId = requestCount;
        newRequest.status = true;
        newRequest.newRatingObligationEnabled = _newRatingObligationEnabled;
        newRequest.newRatingObligationTimePeriod = _newRatingObligationTimePeriod;
        newRequest.newRequiredRatingPercentage = _newRequiredRatingPercentage;

        // Add the requester to the voted list with a positive vote
        newRequest.voted[msg.sender] = true;
        newRequest.approvalCount++;

        emit ChangeRequestSubmitted(requestCount, msg.sender);
        emit VoteCasted(requestCount, msg.sender, true, newRequest.approvalCount, newRequest.rejectionCount);
    }

    function castVote(uint256 requestId, bool vote) external notVoted(requestId) {
        ChangeRequestWithoutMapping storage currentRequest = changeRequests[requestId];
        require(currentRequest.status, "Request already closed");

        VoteData memory voteData;
        voteData.vote = vote;
        voteData.requestId = requestId;
        voteData.approvalCount = currentRequest.approvalCount;
        voteData.rejectionCount = currentRequest.rejectionCount;
        voteData.status = currentRequest.status;

        // Add the voter to the voted list
        currentRequest.voted[msg.sender] = true;

        // Determine if it's an approval or rejection
        if (vote) {
            voteData.isApproval = true;
            voteData.approvalCount++;
        } else {
            voteData.isApproval = false;
            voteData.rejectionCount++;
        }

        emit VoteCasted(
            voteData.requestId,
            msg.sender,
            voteData.vote,
            voteData.approvalCount,
            voteData.rejectionCount
        );

        // Check if the majority has voted
        if ((voteData.approvalCount * 100) / totalAddressesCount > 50) {
            // Apply the changes and close the request
            ratingObligationEnabled = currentRequest.newRatingObligationEnabled;
            ratingObligationTimePeriod = currentRequest.newRatingObligationTimePeriod;
            requiredRatingPercentage = currentRequest.newRequiredRatingPercentage;
            currentRequest.status = false;

            emit PropertiesUpdated(
                ratingObligationEnabled,
                ratingObligationTimePeriod,
                requiredRatingPercentage
            );
        } else if ((voteData.rejectionCount * 100) / totalAddressesCount > 50) {
            // Reject the changes and close the request
            currentRequest.status = false;
        }
    }

    function showActiveProposals() external view returns (
        uint256[] memory requestIds,
        address[] memory requestors,
        bool[] memory statuses,
        bool[] memory newRatingObligationEnabled,
        uint256[] memory newRatingObligationTimePeriod,
        uint256[] memory newRequiredRatingPercentage,
        uint256[] memory approvalCounts,
        uint256[] memory rejectionCounts
    ) {
        uint256 count;
        for (uint256 i = 1; i <= requestCount; i++) {
            if (changeRequests[i].status) {
                count++;
            }
        }

        requestIds = new uint256[](count);
        requestors = new address[](count);
        statuses = new bool[](count);
        newRatingObligationEnabled = new bool[](count);
        newRatingObligationTimePeriod = new uint256[](count);
        newRequiredRatingPercentage = new uint256[](count);
        approvalCounts = new uint256[](count);
        rejectionCounts = new uint256[](count);

        count = 0;
        for (uint256 i = 1; i <= requestCount; i++) {
            if (changeRequests[i].status) {
                ChangeRequestWithoutMapping storage currentRequest = changeRequests[i];
                requestIds[count] = currentRequest.requestId;
                requestors[count] = currentRequest.requestor;
                statuses[count] = currentRequest.status;
                newRatingObligationEnabled[count] = currentRequest.newRatingObligationEnabled;
                newRatingObligationTimePeriod[count] = currentRequest.newRatingObligationTimePeriod;
                newRequiredRatingPercentage[count] = currentRequest.newRequiredRatingPercentage;
                approvalCounts[count] = currentRequest.approvalCount;
                rejectionCounts[count] = currentRequest.rejectionCount;

                count++;
            }
        }

        return (
            requestIds,
            requestors,
            statuses,
            newRatingObligationEnabled,
            newRatingObligationTimePeriod,
            newRequiredRatingPercentage,
            approvalCounts,
            rejectionCounts
        );
    }

    function showAllActiveProperties() external view returns (bool, uint256, uint256) {
        return (ratingObligationEnabled, ratingObligationTimePeriod, requiredRatingPercentage);
    }
    
    function getRatingObligationEnabled() external view returns (bool) {
        return ratingObligationEnabled;
    }

    function getRatingObligationTimePeriod() external view returns (uint256) {
        return ratingObligationTimePeriod;
    }

    function getRequiredRatingPercentage() external view returns (uint256) {
        return requiredRatingPercentage;
    }
}

