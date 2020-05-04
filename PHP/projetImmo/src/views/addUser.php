<?php
require '../config/config.php';
require '../models/connect.php';

$db = connect();

// Ajout d'un pseudo
if(isset($_POST['inputPassword'])) {
    $mdp = password_hash(htmlspecialchars(trim($_POST['inputPassword'])), PASSWORD_BCRYPT);
} else {
    $mdp = '';
}

if(isset($_POST['inputPseudo'])) {
    $pseudo = htmlspecialchars(trim($_POST['inputPseudo']));
} else {
    $pseudo = '';
}
if(isset($_POST['inputName'])) {
    $nom = htmlspecialchars(trim($_POST['inputName']));
} else {
    $nom = '';
}
if(isset($_POST['inputFirstName'])) {
    $prenom = htmlspecialchars(trim($_POST['inputFirstName']));
} else {
    $prenom = '';
}

if(isset($_POST['inputRole'])) {
    $role = htmlspecialchars(trim($_POST['inputRole']));
} else {
    $role = '';
}

if(isset($_POST['inputEmail'])) {
    $email = htmlspecialchars(trim($_POST['inputEmail']));
} else {
    $email = '';
}

$sqlUser = "INSERT INTO user (pseudoUser, mdpUser, roleUser) VALUES (:insertPseudo, :insertMdp, :insertRole)";
$reqInsertUser = $db->prepare($sqlUser);
$reqInsertUser->bindParam(':insertPseudo', $pseudo);
$reqInsertUser->bindParam(':insertMdp', $mdp);
$reqInsertUser->bindParam(':insertRole', $role);
$reqInsertUser->execute();