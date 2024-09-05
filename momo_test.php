<?php

// $curl = curl_init();

// curl_setopt_array($curl, [
//   CURLOPT_URL => "https://api.lenco.co/access/v2/collections/mobile-money",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => json_encode([
//     'operator' => 'mtn',
//     'bearer' => 'customer',
//     'amount' => 2,
//     'reference' => '1122',
//     'phone' => '0965157033',
//     'country' => 'zm'
//   ]),
//   CURLOPT_HTTPHEADER => [
//     "Authorization: Bearer 20e8b5893f910dedc9c3673d7a9d819589a1d601eca2f06838a73e428bb0b943",
//     "accept: application/json",
//     "content-type: application/json"
//   ],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

//????

// die;

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.lenco.co/access/v2/collections/mobile-money",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'operator' => 'airtel',
    'bearer' => 'customer',
    'amount' => 2,
    'reference' => date('YmdHis'),
    'phone' => '0976809818',
    'country' => 'zm'
  ]),
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer 20e8b5893f910dedc9c3673d7a9d819589a1d601eca2f06838a73e428bb0b943",
    "accept: application/json",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}