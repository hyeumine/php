<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/payment/v1/transactions/amount?access_token=<access_token>&amount=<amount>&description=AppTest&endUserId=<endUserId>&referenceCode=<referenceCode>&transactionOperationStatus=Charged&duration=<duration>",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}