<?php
$nomActInput = array_column($_POST['data'], 'value');
$nomAct = $nomActInput[0];

$nomActExplode = explode(' ', $nomAct);
$acteur = implode ('-',$nomActExplode);

// var_dump($acteur);

require '../api/api_acteur.php';

if($acteur) {
    showDetailActeur($acteur);
}