<?php
use App\Models\Comments;

$comment = new Comments($db);

// var_dump($_POST['comments']);
$login = $_SESSION['login'];
$serieId = $_GET['id'];

// Ajout d'un commentaire
$comment->setAuteur($login);
$comment->setComment($_POST['comments']);
$comment->setSerieId($serieId);

$comment->create();