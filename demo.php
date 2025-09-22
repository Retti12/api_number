<?php
// Demo token. (Replace it with your token).
$token = 'YOUR_TOKEN_HERE'; // <-- сюда вставляй свой токен локально
$numbers = '25';

$url = 'https://wildtracks.pro/api/numbers/'.$token.'/'.$numbers.'/';

// We receive confirmation via the LINK
$jsonData = file_get_contents($url);

// Checking if the data was received successfully
if ($jsonData === false) {
    die('Error receiving data from the URL');
}

// Converting JSON to an associative array
$dataArray = json_decode($jsonData, true);

// Checking if it was possible to convert JSON to an array
if ($dataArray === null) {
    die('Error decoding JSON');
}

// Output an array
echo "<pre>";
print_r($dataArray);
echo "</pre>";
?>