<?php

// $nomSerie = $_POST['data'][0]['value'];
// $annees = $_POST['data'][1]['value'];
// $continent = $_POST['data'][2];
// $nomContinent = $continent['value'];
$formInput = array_column($_POST['data'], 'value');
$nomSerie = $formInput[0];
$annees = $formInput[1];
$nomContinent = $formInput[2];

$nomSerieExplode = explode(' ', $nomSerie);
$titreSerie = implode ('-',$nomSerieExplode);
// var_dump($annees);

require '../api/api_recherche.php';

showListPays($titreSerie, $annees, $nomContinent);

// nomSerie avec l'API qui recherche les séries en mettant le nom
// Travail à faire non sélection du continent pour afficher tous les séries