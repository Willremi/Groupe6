<?php
$login = $_SESSION['login'];


$user->setPseudo($login);
$data = $user->selectByPseudo();

$idUser = $data->idUser;
// var_dump($idUser);

$user->setId($idUser);
$user->setNom($_POST['userName']);
$user->setPrenom($_POST['userFirstName']);
$user->setPseudo($_POST['userPseudo']);
$user->setMail($_POST['userMail']);
$user->setNumRue($_POST['numRue']);
$user->setAdress($_POST['nomRue']);
$user->setComplementAdress($_POST['nomRue2']);
$user->setCodePostal($_POST['cpVille']);
$user->setVille($_POST['nomVille']);

$user->update();

?>
<a href="/"><button type="button" class="btn btn-danger">Retour</button></a>