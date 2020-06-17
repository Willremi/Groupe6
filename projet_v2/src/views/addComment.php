<?php
use App\Models\Comments;

$comment = new Comments($db);

// var_dump($_POST['comments']);
$login = $_SESSION['login'];
$idSerie = $_GET['id'];

$urlSerie = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

    $tab_select_serie = json_decode($urlSerie);

    // Nom de la série
    $nom = $tab_select_serie->name;

    dump($nom);

// Ajout de série dans base de données

// Ajout d'un commentaire
// $comment->setAuteur($login);
// $comment->setComment($_POST['comments']);
// $comment->setSerieId($idSerie);

// $comment->create();