<?php
$continent = $_POST['data'][0];
$nomContinent = $continent['value'];
// var_dump($nomContinent);

require '../api/api_pays.php';

showListPays($nomContinent);