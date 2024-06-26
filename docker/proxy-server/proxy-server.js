const express = require('express');
const request = require('request');
const app = express();
const PORT = 3000;

app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    next();
});

app.get('/btc-price', (req, res) => {
    const apiUrl = 'https://api.mexc.com/api/v3/avgPrice?symbol=BTCUSDT';
    request(apiUrl, { json: true }, (err, response, body) => {
        if (err) {
            return res.status(500).send(err);
        }
        res.send(body);
    });
});

app.listen(PORT, () => {
    console.log(`Proxy server running on http://localhost:${PORT}`);
});