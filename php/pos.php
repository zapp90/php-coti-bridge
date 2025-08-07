<?php
// pos.php

include('config.php');

$data = [
    'merchant_id' => MERCHANT_ID,
    'customer_id' => 'C12345',
    'items' => [
        ['name' => 'Espresso', 'price' => 5.00],
        ['name' => 'Muffin', 'price' => 3.50]
    ],
    'total' => 8.50,
    'timestamp' => time()
];

$ch = curl_init(COTI_API_URL);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo " Response from COTI Bridge: " . $response;
