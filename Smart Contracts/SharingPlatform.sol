// SPDX-License-Identifier: UNLICENSED
pragma solidity >=0.4.22 <0.9.0;

import "./CommunityProperties.sol";

contract Marketplace {
    struct Data {
        uint256 itemId;
        string description;
        string hash;
        uint256 priceInEther;
        address seller;
        address[] buyers;
        uint256 reviewCount;
        address[] reviewKeys;
        mapping(address => Review) reviews;
        uint8 averageRating;
    }

    struct Review {
        uint8 rating;
        string textReview;
    }

    struct BuyerInfo {
        uint256 totalPurchases;
        uint256 totalRatings;
        uint256 firstPurchaseTimestamp;
        uint256 lastPurchaseTimestamp;
    }

    mapping(uint256 => Data) public dataItems;
    mapping(address => uint256[]) public sellerPurchasedItems;
    mapping(address => BuyerInfo) public buyerInfo;
    mapping(address => uint8) public sellerRatings;

    uint256 public dataItemCount;
    address payable public feeReceiver;
    uint256 public feePercentage = 10;

    event DataItemCreated(uint256 indexed itemId, string description, string hash, uint256 priceInEther, address indexed seller, string db_name, string doc_id);
    event DataItemPurchased(uint256 indexed itemId, string description, string hash, uint256 priceInEther, address indexed buyer, address indexed seller, string destination_db);
    event DataItemDeleted(uint256 indexed itemId);
    event ReviewAdded(uint256 indexed itemId, address indexed buyer, uint8 rating, string textReview);

    CommunityProperties public communityProperties;

    constructor(address _communityProperties) {
        feeReceiver = payable(0xFE3B557E8Fb62b89F4916B721be55cEb828dBd73);
        communityProperties = CommunityProperties(_communityProperties);
    }

    modifier checkRatingObligation(address buyer) {
        if (communityProperties.getRatingObligationEnabled()) {
            if (block.timestamp - buyerInfo[buyer].firstPurchaseTimestamp > communityProperties.getRatingObligationTimePeriod()) {
                require(
                    (buyerInfo[buyer].totalRatings * 100 / buyerInfo[buyer].totalPurchases) >= communityProperties.getRequiredRatingPercentage(),
                    "Rating obligation not met"
                );
            }
        }
        _;
    }

    function seeAllAvailableDataItems() public view returns (
        uint256[] memory itemIds,
        string[] memory descriptions,
        string[] memory hashes,
        uint256[] memory pricesInEther,
        address[] memory sellers,
        uint8[] memory averageRatings
    ) {
        itemIds = new uint256[](dataItemCount);
        descriptions = new string[](dataItemCount);
        hashes = new string[](dataItemCount);
        pricesInEther = new uint256[](dataItemCount);
        sellers = new address[](dataItemCount);
        averageRatings = new uint8[](dataItemCount);

        for (uint256 i = 1; i <= dataItemCount; i++) {
            Data storage dataItem = dataItems[i];
            itemIds[i - 1] = dataItem.itemId;
            descriptions[i - 1] = dataItem.description;
            hashes[i - 1] = dataItem.hash;
            pricesInEther[i - 1] = dataItem.priceInEther;
            sellers[i - 1] = dataItem.seller;
            averageRatings[i - 1] = dataItem.averageRating;
        }

        return (itemIds, descriptions, hashes, pricesInEther, sellers, averageRatings);
    }

    function offerData(string memory _description, string memory _hash, uint256 _priceInEther, string memory db_name, string memory doc_id) public payable checkRatingObligation(msg.sender) {
        require(bytes(_description).length > 0, "Description cannot be empty");
        require(bytes(_hash).length > 0, "Hash cannot be empty");
        require(_priceInEther > 0, "Price must be greater than zero");

        dataItemCount++;
        Data storage newItem = dataItems[dataItemCount];
        newItem.itemId = dataItemCount;
        newItem.description = _description;
        newItem.hash = _hash;
        newItem.priceInEther = _priceInEther;
        newItem.seller = msg.sender;

        if (buyerInfo[msg.sender].firstPurchaseTimestamp == 0) {
            buyerInfo[msg.sender].firstPurchaseTimestamp = block.timestamp;
        }
        buyerInfo[msg.sender].lastPurchaseTimestamp = block.timestamp;
        buyerInfo[msg.sender].totalPurchases++;

        emit DataItemCreated(dataItemCount, _description, _hash, _priceInEther, msg.sender, db_name, doc_id);
    }

    function purchaseData(uint256 _itemId, string memory destination_db) public payable checkRatingObligation(msg.sender) {
        require(_itemId > 0 && _itemId <= dataItemCount, "Invalid item id");
        Data storage dataItem = dataItems[_itemId];
        require(dataItem.seller != address(0), "Data item does not exist");
        require(dataItem.seller != msg.sender, "You cannot buy your own data");
        require(address(this).balance >= dataItem.priceInEther * 1e18, "Insufficient funds in the smart contract");

        // Calculate and store average rating before updating buyers
        dataItem.averageRating = calculateAverageRating(_itemId);

        uint256 feeAmount = (dataItem.priceInEther * 1e18 * feePercentage) / 100;
        uint256 sellerAmount = dataItem.priceInEther * 1e18 - feeAmount;

        // Update buyers
        dataItem.buyers.push(msg.sender);

        address payable seller = payable(dataItem.seller);
        (bool success, ) = seller.call{value: sellerAmount}("");
        require(success, "Failed to send ETH to seller");

        (success, ) = feeReceiver.call{value: feeAmount}("");
        require(success, "Failed to send fee to fee receiver");

        buyerInfo[msg.sender].totalRatings++;

        sellerPurchasedItems[dataItem.seller].push(_itemId);

        emit DataItemPurchased(_itemId, dataItem.description, dataItem.hash, dataItem.priceInEther, msg.sender, dataItem.seller, destination_db);
    }

    function deleteDataItem(uint256 _itemId) public {
        require(_itemId > 0 && _itemId <= dataItemCount, "Invalid item id");
        Data storage dataItem = dataItems[_itemId];
        require(dataItem.seller == msg.sender, "Only the seller can delete the data item");

        delete dataItems[_itemId];
        emit DataItemDeleted(_itemId);
    }

    function addReview(uint256 _itemId, uint8 _rating, string memory _textReview) public {
        require(_itemId > 0 && _itemId <= dataItemCount, "Invalid item id");
        require(_rating >= 1 && _rating <= 10, "Rating must be between 1 and 10");

        Data storage dataItem = dataItems[_itemId];
        require(dataItem.seller != address(0), "Data item does not exist");
        require(isBuyer(_itemId, msg.sender), "You are not authorized to add a review for this CTI data");

        // If the buyer has already submitted a review, update it
        if (dataItem.reviews[msg.sender].rating > 0) {
            // Subtract the old rating before updating
            uint8 oldRating = dataItem.reviews[msg.sender].rating;
            dataItem.reviews[msg.sender].rating = _rating;
            dataItem.averageRating = recalculateAverageRating(_itemId, oldRating, _rating);
        } else {
            // Add the review
            dataItem.reviews[msg.sender] = Review(_rating, _textReview);

            // Update the reviewKeys array
            dataItem.reviewKeys.push(msg.sender);

            // Increment the review count
            dataItem.reviewCount++;

            // Calculate and store average rating after adding a new review
            dataItem.averageRating = calculateAverageRating(_itemId);
        }

        emit ReviewAdded(_itemId, msg.sender, _rating, _textReview);
    }

    function getReviewsForDataItem(uint256 _itemId) public view returns (address[] memory reviewers, uint8[] memory ratings, string[] memory textReviews, uint8 averageRating) {
        Data storage dataItem = dataItems[_itemId];

        uint256 numberOfReviews = dataItem.reviewCount;

        reviewers = new address[](numberOfReviews);
        ratings = new uint8[](numberOfReviews);
        textReviews = new string[](numberOfReviews);

        uint256 index = 0;
        for (uint256 i = 0; i < dataItem.reviewCount; i++) {
            address reviewer = dataItem.reviewKeys[i];
            reviewers[index] = reviewer;
            ratings[index] = dataItem.reviews[reviewer].rating;
            textReviews[index] = dataItem.reviews[reviewer].textReview;

            index++;
        }

        averageRating = dataItem.averageRating;

        return (reviewers, ratings, textReviews, averageRating);
    }

    function recalculateAverageRating(uint256 _itemId, uint8 oldRating, uint8 newRating) internal view returns (uint8) {
        Data storage dataItem = dataItems[_itemId];

        uint256 numberOfReviews = dataItem.reviewCount;

        if (numberOfReviews == 0) {
            return 0;
        }

        uint256 totalRating = dataItem.averageRating * numberOfReviews;

        totalRating = totalRating - oldRating + newRating;

        return uint8(totalRating / numberOfReviews);
    }

    function calculateSellerRating(address seller) external view returns (uint8) {
        uint256[] storage purchasedItems = sellerPurchasedItems[seller];
        uint256 totalRating = 0;

        for (uint256 i = 0; i < purchasedItems.length; i++) {
            totalRating += dataItems[purchasedItems[i]].averageRating;
        }

        return uint8(totalRating / purchasedItems.length);
    }

    function calculateAverageRating(uint256 _itemId) internal view returns (uint8) {
        Data storage dataItem = dataItems[_itemId];

        uint256 numberOfReviews = dataItem.reviewCount;

        if (numberOfReviews == 0) {
            return 0;
        }

        uint256 totalRating = 0;

        for (uint256 i = 0; i < dataItem.reviewCount; i++) {
            totalRating += dataItem.reviews[dataItem.reviewKeys[i]].rating;
        }

        return uint8(totalRating / numberOfReviews);
    }

    function isBuyer(uint256 _itemId, address _buyer) internal view returns (bool) {
        Data storage dataItem = dataItems[_itemId];
        for (uint256 i = 0; i < dataItem.buyers.length; i++) {
            if (dataItem.buyers[i] == _buyer) {
                return true;
            }
        }
        return false;
    }

    receive() external payable {}
}
