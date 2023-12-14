// SPDX-License-Identifier: UNLICENSED
pragma solidity >=0.4.22 <0.9.0;
contract SealContract {
    struct Seal {
        uint256 tokenId;
        string name;
        string date;
        bool isValid;
        string randomizer;
        bytes32 token;
    }
    mapping(uint256 => Seal) public seals;
    uint256 public sealCount;
    event SealCreated(uint256 indexed tokenId, string name, string date, string randomizer, bytes32 token);
    event SealRevoked(uint256 indexed tokenId);
    address public admin;
    constructor() {
        admin = msg.sender;
    }
    modifier onlyAdmin() {
        require(msg.sender == admin, "Only admin can call this function");
        _;
    }
    function createSeal(string memory _name, string memory _date, string memory _randomizer) public onlyAdmin {
        bytes32 token = generateToken(_name, _date, _randomizer);
        uint256 tokenId = sealCount;
        seals[tokenId] = Seal(tokenId, _name, _date, true, _randomizer, token);
        sealCount++;
        emit SealCreated(tokenId, _name, _date, _randomizer, token);
    }
    function validateSeal(bytes32 _token) public view returns (string memory, string memory) {
        uint256 tokenId = findSealByToken(_token);
        require(seals[tokenId].isValid, "Seal is not valid");
        return (seals[tokenId].name, seals[tokenId].date);
    }
    function revokeSeal(bytes32 _token) public onlyAdmin {
        uint256 tokenId = findSealByToken(_token);
        require(seals[tokenId].isValid, "Seal is not valid");
        seals[tokenId].isValid = false;
        emit SealRevoked(tokenId);
    }
    function getAllSeals() public view onlyAdmin returns (Seal[] memory) {
        Seal[] memory validSeals = new Seal[](sealCount);
        uint256 count = 0;
        for (uint256 i = 0; i < sealCount; i++) {
            if (seals[i].isValid) {
                validSeals[count] = seals[i];
                count++;
            }
        }
        Seal[] memory result = new Seal[](count);
        for (uint256 i = 0; i < count; i++) {
            result[i] = validSeals[i];
        }
        return result;
    }
    function generateToken(string memory _name, string memory _date, string memory _randomizer) private pure returns (bytes32) {
        return sha256(abi.encodePacked(_name, _date, _randomizer));
    }
    function findSealByToken(bytes32 _token) private view returns (uint256) {
        for (uint256 i = 0; i < sealCount; i++) {
            if (generateToken(seals[i].name, seals[i].date, seals[i].randomizer) == _token) {
                return i;
            }
        }
        revert("Seal not found");
    }
}
