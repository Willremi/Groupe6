<?php
$router->map('GET', '/', '/', 'base');
$router->map('GET|POST', '/Recherche', 'Recherche', 'Recherche');
$router->map('GET|POST', '/incorruptibles', 'incorruptibles', 'incorruptibles');
$router->map('GET|POST', '/contact', 'contact', 'contact');
$router->map('GET|POST', '/mail', 'mail', 'mail');
$router->map('GET|POST', '/connexion', 'connexion', 'connexion');
$router->map('GET|POST', '/inscription', 'inscription', 'inscription');