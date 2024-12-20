const express = require("express");
const bodyParser = require("body-parser");
const Blockchain = require("./blockchain-backend/blockchain");

const app = express();
const blockchain = new Blockchain();
app.use(express.static('public'));
app.use(express.json());
const cors = require('cors');
app.use(cors());

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/public/index.html");
});

app.get("/blockchain", (req, res) => {
    res.json(blockchain.chain);  // Send only the chain (blocks)
});


app.get('/patient-record/:patientId', (req, res) => {
    const patientId = req.params.patientId;
    const record = blockchain.getRecordByPatientId(patientId);

    if (!record) {
        return res.status(404).json({ error: "Patient not found" });
    }

    res.json({ record });
});

app.post('/patient-record', (req, res) => {
    const { patientID, doctorName, appointmentDate, description } = req.body;

    if (!patientID || !doctorName || !appointmentDate || !description) {
        return res.status(400).json({ error: "All fields are required!" });
    }

    const newRecord = {
        patientId: patientID,      
        doctor: doctorName,
        date: appointmentDate,
        description,
        timestamp: Date.now(),
    };

    // Adding the new record to the blockchain
    const blockIndex = blockchain.addRecord(newRecord);

    // Mining a new block immediately after adding the record
    const lastBlock = blockchain.getLastBlock();
    const previousBlockHash = lastBlock["hash"];
    const currentBlockData = {
        index: lastBlock["index"] + 1,
        timestamp: Date.now(),
        patientRecord: newRecord,
    };

    const nonce = blockchain.proofOfWork(previousBlockHash, currentBlockData);
    const blockHash = blockchain.hashBlock(previousBlockHash, currentBlockData, nonce);

    const newBlock = blockchain.createNewBlock(nonce, previousBlockHash, blockHash);

    res.json({
        message: "Patient record added and new block mined successfully!",
        record: newRecord,
        block: newBlock,
    });
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
