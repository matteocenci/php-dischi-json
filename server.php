<?php
$dataFile = 'data.json';

// Leggo il file
$list_string = file_get_contents("data.json"); //string

// Trasformo la stringa in un array
$list = json_decode($list_string, true);





$response_data = [
    "results" => $list,
    "success" => true
];


$json_list = json_encode($response_data);

header("Content-Type: application/json");

echo $json_list;

?>