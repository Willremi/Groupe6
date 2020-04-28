<?php
require 'vendor/autoload.php';
require 'src/views/elements/head.php';
require 'src/views/elements/footer.php';

head();
$router = new AltoRouter();
// $router->setBasePath('public/');

$router->map('GET', '/', '/', 'base');
$router->map('GET|POST', '/Recherche', 'Recherche', 'Recherche');
$router->map('GET|POST', '/incorruptibles', 'incorruptibles', 'incorruptibles');
$router->map('GET|POST', '/contact', 'contact', 'contact');
$router->map('GET|POST', '/mail', 'mail', 'mail');
$router->map('GET|POST', '/connexion', 'connexion', 'connexion');
$router->map('GET|POST', '/inscription', 'inscription', 'inscription');

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
} 




footer();
