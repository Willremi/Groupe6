<?php
require 'vendor/autoload.php';
require 'src/views/elements/head.php';
require 'src/views/elements/footer.php';

head();
$router = new AltoRouter();
// $router->setBasePath('public/');

$router->map('GET', '/', '/', 'base');
$router->map('GET|POST', '/Recherche', 'Recherche', 'Recherche');
$router->map('GET|POST', '/contact', 'contact', 'contact');
$router->map('GET|POST', '/connexion', 'connexion', 'connexion');

$match = $router->match();
// dump($match);


if($match['target'] === '/') {
    require 'src/views/home.php';
} elseif ($match['target'] === 'Recherche') {
    require 'src/views/listSeries.php';
} elseif ($match['target'] === 'contact') {
    require 'src/views/contact.php';
} elseif ($match['target'] === 'connexion') {
    require 'src/views/login.php';
}




footer();
