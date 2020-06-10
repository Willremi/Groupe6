<?php
require_once 'src/classes/User.php';
// Ajout d'un pseudo
// if(isset($_POST['inputName'])) {
//     $nom = htmlspecialchars(trim($_POST['inputName']));
// } else {
//     $nom = '';
// }

// if(isset($_POST['inputFirstname'])) {
//     $prenom = htmlspecialchars(trim($_POST['inputFirstname']));
// } else {
//     $prenom = '';
// }

// if(isset($_POST['inputPseudo'])) {
//     $pseudoInsert = htmlspecialchars(trim($_POST['inputPseudo']));
// } else {
//     $pseudoInsert = '';
// }

// if(isset($_POST['inputEmail'])) {
//     $email = htmlspecialchars(trim($_POST['inputEmail']));
// } else {
//     $email = '';
// }

// if(isset($_POST['inputMdp'])) {
//     $mdp = password_hash(htmlspecialchars(trim($_POST['inputMdp'])), PASSWORD_BCRYPT);
// } else {
//     $mdp = '';
// }

// if($_POST['inputNumAdress']) {
//     $numRue = htmlspecialchars(trim($_POST['inputNumAdress']));
// } else {
//     $numRue = '';
// }

// if(isset($_POST['inputAdress'])) {
//     $adresse = htmlspecialchars(trim($_POST['inputAdress']));
// } else {
//     $adresse = '';
// }

// if($_POST['inputAdress2']) {
//     $adresseCompl = htmlspecialchars(trim($_POST['inputAdress2']));
// } else {
//     $adresseCompl = '';
// }

// if(isset($_POST['inputCp'])) {
//     $cp = htmlspecialchars(trim($_POST['inputCp']));
// } else {
//     $cp = '';
// }

// if(isset($_POST['inputCity'])) {
//     $ville = htmlspecialchars(trim($_POST['inputCity']));
// } else {
//     $ville = '';
// }

$user = new User($db);


$user->setNom($_POST['inputName']);
$user->setPrenom($_POST['inputFirstname']);
$user->setPseudo($_POST['inputPseudo']);
$user->setMail($_POST['inputEmail']);
$user->setMdp($_POST['inputMdp']);
$user->setNumRue($_POST['inputNumAdress']);
$user->setAdress($_POST['inputAdress']);
$user->setComplementAdress($_POST['inputAdress2']);
$user->setCodePostal($_POST['inputCp']);
$user->setVille($_POST['inputCity']);

$user->create();
