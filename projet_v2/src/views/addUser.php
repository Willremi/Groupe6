<?php

// Ajout d'un pseudo

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
