// index.js

const express = require('express');
const dotenv = require('dotenv');
const cotiBridge = require('./cotiBridge');

dotenv.config();

const app = express();
const PORT = process.env.PORT || 8300;

app.use(express.json());

app.post('/api/submit', async (req, res) => {
  try {
    const txResult = await cotiBridge.handleSale(req.body);
    res.json({ success: true, result: txResult });
  } catch (err) {
    console.error('Error submitting to COTI:', err);
    res.status(500).json({ success: false, error: err.message });
  }
});

app.listen(PORT, () => {
  console.log(`COTI Bridge API running on http://localhost:${PORT}`);
});
