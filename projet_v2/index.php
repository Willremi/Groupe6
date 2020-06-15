<?php
session_start();
require 'vendor/autoload.php';
require 'src/config/config.php';
require 'src/config/connect.php';
require 'src/views/elements/head.php';
require 'src/views/elements/footer.php';
// require_once 'src/models/user.php';
use App\Models\User;

$db = connect();
$user = new User($db);

$error = '';

if (!isset($_SESSION['login']) && isset($_POST['inputPseudo'])) {
    // Sélection pseudo et mot de passe de l'utilisateur
    $pseudoInput = $user->setPseudo($_POST['inputPseudo']);
    $reqSelUser = $user->selectByPseudo();
    $pseudoUser = $reqSelUser->Pseudo;
    $mdpUser = $reqSelUser->Mdp;

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['inputMdp'], $mdpUser);
    // var_dump($isPasswordCorrect);
    if (!$isPasswordCorrect) {
        $error = 'Mauvais identifiant ou mot de passe';
    } else {
        $_SESSION['login'] = $pseudoUser;
        // exit();
        header('location: /');
    }
} 

// if(password_verify($_POST['inputMdp'], $mdpUser)) {
//     if(isset($_SESSION['login'])) {
//     $pseudo = $_SESSION['login'];
//     } else {
//     $_SESSION['login'] = $pseudoUser;
//     $pseudo = $_SESSION['login'];
//     }
//     header('location: /');
// }


head();
$router = new AltoRouter();
// $router->setBasePath('');

require 'src/views/elements/router.php';

$match = $router->match();
// dump($match);


if($match['target'] === '/') {
    require 'src/views/home.php';
} elseif ($match['target'] === 'Recherche') {
    require 'src/views/listSeries.php';
} elseif ($match['target'] === 'serie') {
    require 'src/views/serie.php';
} elseif ($match['target'] === 'saison') {
    require 'src/views/saison.php';
} elseif ($match['target'] === 'episode') {
    require 'src/views/episode.php';
} elseif ($match['target'] === 'contact') {
    require 'src/views/contact.php';
} elseif ($match['target'] === 'mail') {
    require 'src/views/mail.php';
}elseif ($match['target'] === 'connexion') {
    require 'src/views/login.php';
} elseif ($match['target'] === 'inscription') {
    require 'src/views/inscription.php';
} elseif ($match['target'] === 'addUser') {
    require 'src/views/addUser.php';
} elseif ($match['target'] === 'streaming') {
    require 'src/views/streaming.php';
} elseif ($match['target'] === 'musiques') {
    require 'src/views/musiques.php';
} elseif ($match['target'] === 'acteurs') {
    require 'src/views/acteurs.php';
} elseif ($match['target'] === 'bio') {
    require 'src/views/bio.php';
} elseif ($match['target'] === 'compte') {
    require 'src/views/compte.php';
} elseif ($match['target'] === 'Modification') {
    require 'src/views/updateUser.php';
} elseif ($match['target'] === 'deleteUser') {
    require 'src/views/deleteUser.php';
} elseif ($match['target'] === 'updateUserInfo') {
    require 'src/views/updateUserInfo.php';
}


footer();
