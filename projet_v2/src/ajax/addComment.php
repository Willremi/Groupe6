<?php
require '../../vendor/autoload.php';
require '../config/config.php';
require '../config/connect.php';

use App\Models\Comments;
use App\Models\Series;

$db = connect();

$comment = new Comments($db);
$serie = new Series($db);

// $user = new User($db);

$idSerie = (int)$_GET['idSerie'];
$login = $_GET['user'];
$commentInput = array_column($_GET['data'], 'value');
$commentaire = $commentInput[0];

$urlSerie = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

$tab_select_serie = json_decode($urlSerie);

// Nom de la série
$nom = $tab_select_serie->name;

// dump($nom);
$serie->setApiSerieId($idSerie);

$data = $serie->selectByApiId();
$id = (int)$data->id;
// dump($data);
if(!$data) {
    $serie->setApiSerieId($idSerie);
    $serie->setNomSerie($nom);
    $serie->create();
} else {
    $data;
}

// Ajout de série dans base de données
// var_dump($id);
// Ajout d'un commentaire
$comment->setAuteur($login);
$comment->setComment($commentaire);
$comment->setSerieId($id);

// $comment->create();



