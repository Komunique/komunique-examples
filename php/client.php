<?php

// app-id e app-token são obtidos ao criar uma conta
$app = '00000000-0000-0000-0000-000000000000';
$token = '00000000000000000000000000000000';

$body = json_encode([
    'destination_number' => '+5521987654321',
    'message' => 'Hello SMS - PHP',
]);

$request = curl_init();
curl_setopt($request, CURLOPT_URL, "https://api.komunique.com.br/v1/sms");
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
curl_setopt($request, CURLOPT_POST, true);
curl_setopt($request, CURLOPT_POSTFIELDS, $body);
curl_setopt($request, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($request, CURLOPT_HTTPHEADER, [
    'Content-type: application/json',
    "app-id: $app", 
    "app-token: $token"
]);

$response = curl_exec($request); 
print_r(json_decode($response, true));