# php-coti-bridge
Privacy-First POS Integration: A working example of how a PHP-based Point of Sale (POS) system can securely send encrypted transaction data to COTI V2 smart contracts using a Node.js middleware API. Built to showcase compliance-ready architecture for Web3 retail.

# php-coti-bridge

**Privacy-First POS Integration Using PHP + COTI V2**

This open-source project demonstrates how to connect a PHP-based Point of Sale (POS) system to [COTI V2](https://coti.io) using a Node.js middleware API. It simulates how encrypted transaction data (e.g. receipts, loyalty points) can be sent from a PHP POS system to COTI smart contracts using privacy-preserving encryption.

---

## Features

- ✅ PHP-based simulated POS (no framework)
- ✅ Node.js middleware API using Express
- ✅ Smart contract bridge to COTI V2 (coming soon)
- ✅ Ready for future Laravel / WooCommerce / .NET expansion

---

## Structure

<pre> php-coti-bridge/ ├── php/ # POS frontend (simulated) │ ├── pos.php # Sends transaction to Node API │ ├── config.php # API URL & merchant ID │ └── admin.php # (Optional) decryption viewer │ ├── node/ # Node.js bridge to COTI │ ├── index.js # Express API server │ ├── cotiBridge.js # Submit to COTI smart contract │ ├── .env.example # Config variables │ └── package.json # Node dependencies │ ├── contracts/ # (Optional) Smart contract ABI │ └── EncryptedSale.json │ ├── docs/ │ ├── README.md # This file │ └── architecture.png # Architecture diagram │ ├── .gitignore └── LICENSE </pre>


---

##  Getting Started

1. Clone the repo  
2. Set up `/node` with `npm install` and `node index.js`  
3. Run `php/pos.php` to simulate a sale  
4. Watch data flow to Node.js and (eventually) COTI V2  

---

##  Status

- PHP simulation ready  
- Node API works  
- COTI encryption integration in progress  
- Next: Laravel, WooCommerce, .NET bridges

---

##  License

MIT — use freely, just give credit 🙌
