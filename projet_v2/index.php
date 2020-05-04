<?php
session_start();
require 'vendor/autoload.php';
require 'src/views/elements/head.php';
require 'src/views/elements/footer.php';
require 'src/config/config.php';
require 'src/models/connect.php';

$db = connect();

// head();
$router = new AltoRouter();
// $router->setBasePath('public/');

require 'src/views/elements/router.php';

$match = $router->match();
// dump($match);


if($match['target'] === '/') {
    require 'src/views/home.php';
} elseif ($match['target'] === 'Recherche') {
    require 'src/views/listSeries.php';
} elseif ($match['target'] === 'incorruptibles') {
    require 'src/views/incorrup.php';
}elseif ($match['target'] === 'contact') {
    require 'src/views/contact.php';
} elseif ($match['target'] === 'mail') {
    require 'src/views/mail.php';
}elseif ($match['target'] === 'connexion') {
    require 'src/views/login.php';
} elseif ($match['target'] === 'inscription') {
    require 'src/views/inscription.php';
} elseif($match['target'] === 'addUser') {
    require 'src/views/addUser.php';
}

footer();
