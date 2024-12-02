const sha256 = require('sha256');
const { v1: uuid } = require('uuid');

function Blockchain() {
    this.chain = [];
    this.pendingRecords = [];
    // Create the genesis block
    this.createNewBlock(100, '0', '0');
}

// new block
Blockchain.prototype.createNewBlock = function(nonce, previousBlockHash, hash) {
    const newBlock = {
        index: this.chain.length + 1, // Block index starts from 1
        timestamp: Date.now(),
        records: this.pendingRecords, // All records for the current block
        nonce,
        hash,
        previousBlockHash
    };

    // After the block is mined, clear pending records for the next block
    this.pendingRecords = [];
    this.chain.push(newBlock); // Add the newly created block to the chain
    return newBlock;
};

// Getting the last block
Blockchain.prototype.getLastBlock = function() {
    return this.chain[this.chain.length - 1];
};

// Add a new record
Blockchain.prototype.addRecord = function(record) {
    const newRecord = { ...record, recordId: uuid().split('-').join('') };
    this.pendingRecords.push(newRecord); // Add to the pending records array
    return this.getLastBlock()['index'] + 1; // Return the index for the next block
};

// Hash a block
Blockchain.prototype.hashBlock = function(previousBlockHash, currentBlockData, nonce) {
    const dataAsString = previousBlockHash + nonce.toString() + JSON.stringify(currentBlockData);
    return sha256(dataAsString); // Return the hash as a string
};

// Proof of work (mining a block)
Blockchain.prototype.proofOfWork = function(previousBlockHash, currentBlockData) {
    let nonce = 0;
    let hash = this.hashBlock(previousBlockHash, currentBlockData, nonce);
    // Adjust the difficulty (this example checks for a hash starting with "0000")
    while (hash.substring(0, 4) !== '0000') {
        nonce++;
        hash = this.hashBlock(previousBlockHash, currentBlockData, nonce);
    }
    return nonce; // Return the nonce that produces the correct hash
};

// Get record by patientId
Blockchain.prototype.getRecordByPatientId = function(patientId) {
    let foundRecord = null;

    // Loop through each block and check for a record with the matching patientId
    this.chain.forEach(block => {
        block.records.forEach(record => {
            if (record.patientId === patientId) {  // Check patientId
                foundRecord = record;
            }
        });
    });

    return foundRecord;
};


// For debugging: printing the entire blockchain
Blockchain.prototype.getChain = function() {
    return this.chain;
};

module.exports = Blockchain;
