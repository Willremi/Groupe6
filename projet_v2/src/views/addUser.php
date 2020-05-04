<?php
echo 'toto';

// Ajout d'un pseudo
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

if(isset($_POST['inputEmail'])) {
    $email = htmlspecialchars(trim($_POST['inputEmail']));
} else {
    $email = '';
}

if(isset($_POST['inputPseudo'])) {
    $pseudo = htmlspecialchars(trim($_POST['inputPseudo']));
} else {
    $pseudo = '';
}

if(isset($_POST['inputMdp'])) {
    $mdp = password_hash(htmlspecialchars(trim($_POST['inputMdp'])), PASSWORD_BCRYPT);
} else {
    $mdp = '';
}

if(isset($_POST['inputNumAdress'])) {
    $numRue = htmlspecialchars(trim($_POST['inputNumAdress']));
} else {
    $numRue = '';
}

if(isset($_POST['inputAdress'])) {
    $adresse = htmlspecialchars(trim($_POST['inputAdress']));
} else {
    $adresse = '';
}

if($_POST['inputAdress2']) {
    $adresseCompl = htmlspecialchars(trim($_POST['inputAdress2']));
} else {
    $adresseCompl = '';
}

if(isset($_POST['inputCp'])) {
    $cp = htmlspecialchars(trim($_POST['inputCp']));
} else {
    $cp = '';
}

if(isset($_POST['inputCity'])) {
    $ville = htmlspecialchars(trim($_POST['inputCity']));
} else {
    $ville = '';
}

