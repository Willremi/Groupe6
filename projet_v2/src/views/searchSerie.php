<?php
$nomSerie = $_POST['data'][0]['value'];
// $continent = $_POST['data'][1];
// $nomContinent = $continent['value'];
// var_dump($nomContinent);
$annees = $_POST['data'][1]['value'];


$nomSerieExplode = explode(' ', $nomSerie);
$titreSerie = implode ('-',$nomSerieExplode);

// var_dump($titreSerie);

require '../api/api_recherche.php';

showListPays($titreSerie, $annees);

// nomSerie avec l'API qui recherche les séries en mettant le nom