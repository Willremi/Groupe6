<?php
require_once 'src/classes/user.php';
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
$nom = htmlspecialchars(trim($_POST['inputName'])) ?? '';
$prenom = htmlspecialchars(trim($_POST['inputFirstname'])) ?? '';
$pseudo = htmlspecialchars(trim($_POST['inputPseudo'])) ?? '';
$email = htmlspecialchars(trim($_POST['inputEmail'])) ?? '';
$mdp = password_hash(htmlspecialchars(trim($_POST['inputMdp'])), PASSWORD_BCRYPT) ?? '';
$numRue = htmlspecialchars(trim($_POST['inputNumAdress'])) ?? '';
$adresse = htmlspecialchars(trim($_POST['inputAdress'])) ?? '';
$adresseCompl = htmlspecialchars(trim($_POST['inputAdress2'])) ?? '';
$cp = htmlspecialchars(trim($_POST['inputCp'])) ?? '';
$ville = htmlspecialchars(trim($_POST['inputCity'])) ?? '';



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





$sqlUser = "INSERT INTO user (nomUser, prenomUser, pseudoUser, mailUser, mdpUser, numRue, nomRue1, nomRue2, cpVille, nomVille) VALUES (:insertNom, :insertPrenom, :insertPseudo, :insertMail, :insertMdp, :insertNumRue, :insertNomRue1, :insertNomRue2, :insertCp, :insertVille)";
$reqInsertUser = $db->prepare($sqlUser);
$reqInsertUser->bindParam(':insertNom', $nom);
$reqInsertUser->bindParam(':insertPrenom', $prenom);
$reqInsertUser->bindParam(':insertPseudo', $pseudoInsert);
$reqInsertUser->bindParam(':insertMail', $email);
$reqInsertUser->bindParam(':insertMdp', $mdp);
$reqInsertUser->bindParam(':insertNumRue', $numRue);
$reqInsertUser->bindParam(':insertNomRue1', $adresse);
$reqInsertUser->bindParam(':insertNomRue2', $adresseCompl);
$reqInsertUser->bindParam(':insertCp', $cp);
$reqInsertUser->bindParam(':insertVille', $ville);

$reqInsertUser->execute();

$nbInsert = $reqInsertUser->rowCount();

if($nbInsert == 1){
    // header('Location: /?add=sucess');
    echo '<meta http-equiv="refresh" content="0;URL=/?add=success">';
}else{
    // header('Location: /?add=error');
    echo '<meta http-equiv="refresh" content="0;URL=/?add=error">';
}


var_dump($user);