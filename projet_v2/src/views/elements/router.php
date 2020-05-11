<?php
$router->map('GET', '/', '/', 'base');
$router->map('GET|POST', '/Recherche', 'Recherche', 'Recherche');
$router->map('GET|POST', '/série', 'série', 'série');
$router->map('GET|POST', '/contact', 'contact', 'contact');
$router->map('GET|POST', '/mail', 'mail', 'mail');
$router->map('GET|POST', '/connexion', 'connexion', 'connexion');
$router->map('GET|POST', '/inscription', 'inscription', 'inscription');
$router->map('GET|POST', '/addUser', 'addUser', 'addUser');
$router->map('GET|POST', '/streaming', 'streaming', 'streaming');
$router->map('GET|POST', '/musiques', 'musiques', 'musiques');
$router->map('GET|POST', '/acteurs', 'acteurs', 'acteurs');
$router->map('GET|POST', '/compte', 'compte', 'compte');
$router->map('GET|POST', '/Modification', 'Modification', 'Modification');
$router->map('GET|POST', '/updateUserInfo', 'updateUserInfo', 'updateUserInfo');