<?php
// Fetch country data from REST Countries API
$apiUrl = 'https://restcountries.com/v2/all';
$response = file_get_contents($apiUrl);
$countries = json_decode($response, true);
?>
