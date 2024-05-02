const express = require('express');
const bodyParser = require('body-parser');
const ethers = require('ethers');
const nano = require('nano')('http://admin:Blumenvase1!@127.0.0.1:5984')

// Verbindung zur Ethereum-Blockchain herstellen
var url = 'http://127.0.0.1:7545';
var provider = new ethers.JsonRpcProvider(url);
provider.getBlockNumber().then((result) => {
    console.log("Current block number: " + result);
});

// Adresse und ABI des Smart Contracts
const contractAddress = '0x1Dd483b5F391B1a7c2DB6E96801eebdbE8fED90f'; // Die Adresse des Smart Contracts
const marketplaceArtifact = require('C:\\Users\\jaded\\Desktop\\Uni\\Master\\Wirtschaftsinformatik Uni RGB\\4. Semester\\P-Seminar\\build\\contracts\\marketplace.json'); // Der Pfad zur JSON-Datei des Smart Contracts
// Smart Contract-Instanz erstellen
const contractAbi = marketplaceArtifact.abi;
const contract = new ethers.Contract(contractAddress, contractAbi, provider);
// Variable zur Speicherung der Daten initialisieren
let dataItemInfo = {
  db_name: '',
  doc_id: '',
  destination_db: '',
};

// Ereignisüberwachung - DataItemPurchased Event
contract.on('DataItemPurchased', async (itemId, description, hash, priceInEther, buyer, owner, destination_db, event) => {
  let eventData = {
    itemId,
    destination_db
  };

  const dest = eventData.destination_db;

  dataItemInfo.destination_db = dest;
  // Daten aus DataItemCreated Events abrufen, die zur angegebenen itemId gehören
  const createdEvents = await contract.queryFilter('DataItemCreated');

  const filteredEvents = createdEvents.filter((createdEvent) => {
    return createdEvent.args.itemId === itemId;
  });

  if (filteredEvents.length > 0) {
    const { db_name, doc_id } = filteredEvents[0].args;

    // Daten in der Variable speichern
    dataItemInfo.db_name = db_name;
    dataItemInfo.doc_id = doc_id;

    console.log('DataItemInfo:', dataItemInfo);

    // Funktion zum Durchführen des Datentransfers
    const sourceDb = nano.db.use(db_name);
    const destinationDb = nano.db.use(dest);

    try {
      // Dokument von der Quelldatenbank abrufen
      const sourceDoc = await sourceDb.get(doc_id);
      delete sourceDoc._rev;
      console.log("Document successfully parsed");

      // Dokument in die Zieldatenbank einfügen
      const result = await destinationDb.insert(sourceDoc, doc_id);
      console.log('Dokument erfolgreich von der Quelldatenbank in die Zieldatenbank kopiert.');
    } catch (error) {
      console.error('Fehler beim Kopieren des Dokuments:', error);
    }
  }
});

// Den Off-Chain Server starten
const app = express();
app.use(bodyParser.json());

app.get('/', (req, res) => {
  res.send('Server läuft');
});

app.listen(7545, () => {
  console.log('Off-Chain Server gestartet auf Port 7545');
});
