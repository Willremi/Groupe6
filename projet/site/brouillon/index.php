<?php 
require 'vendor/autoload.php';
require 'src/views/elements/head.php';

$router = new AltoRouter();
// $router->setBasePath('/brouillon');

$router->map('GET', '/', '/', 'base');

$router->map('GET|POST', '/contact', 'contact', 'contact');

$match = $router->match();
// dump($match);

require 'src/views/elements/footer.php';

if ($match["target"] === "/") {
    require 'src/views/home.php';
} elseif ($match["target"] === "contact") {
    require 'src/views/contact.php';
}

head();

footer();