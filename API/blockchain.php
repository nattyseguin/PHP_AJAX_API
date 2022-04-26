<?php
//https://stackoverflow.com/questions/15617512/get-json-object-from-url
//https://stackoverflow.com/questions/47372290/get-json-from-a-url-by-php/47372591
//https://www.w3schools.com/php/func_json_decode.asp
$url = "https://api.blockchain.com/v3/exchange/tickers/BTC-USD";
$json_string = file_get_contents($url);

echo var_dump($json_string)."<br>";

//using json as an object
$obj= json_decode($json_string);
echo $obj->symbol ."<br>";

//using json as an array
$arr= json_decode($json_string,true);
echo $arr["price_24h"];


//conten of object
echo "OBJEC_CONTENT ".var_dump($obj)."<br>";


//content of array
echo "ARRAY CONTENT: ".var_dump($arr)."<br>";
?>