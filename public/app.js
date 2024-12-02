const express = require('express');
const path = require('path');

const app = express();
const port = 3000;  // You can change the port if needed

// Serve static files from the "public" directory
app.use(express.static(path.join(__dirname)));

// Endpoint for the home page
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.html'));
});

// Start the server
app.listen(port, () => {
  console.log(`Server is running at http://localhost:${port}`);
});
