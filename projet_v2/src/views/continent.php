<?php
$continent = $_POST['data'][0];
$nomContinent = $continent['value'];
// var_dump($nomContinent);
$annees = $_POST['data'][1]['value'];
require '../api/api_pays.php';

showListPays($nomContinent, $annees);