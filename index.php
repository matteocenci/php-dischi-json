<?php
$dataFile = 'data.json';

// Leggo il file
$list_string = file_get_contents("data.json"); //string

// Trasformo la stringa in un array
$list = json_decode($list_string, true);
var_dump($list);

?>