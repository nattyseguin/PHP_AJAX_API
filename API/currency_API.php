<?php
//Create an api key (if you want through a temporary email) and get (display) the current exchange 
//rate of a EURO (EUR) in pounds (GBP) and dollars (USD)


// set API Access Key
$access_key = "Y5753a80d857ebd2b896afb92";

// Initialize CURL:
$ch = curl_init('https://app.exchangerate-api.com/key='.$access_key);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
// Store the data:
$json = curl_exec($ch);
curl_close($ch);
 
// Decode JSON response:
$arr_result = json_decode($json, true);
 
echo ($arr_result);
?>