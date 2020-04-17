<?php
// Voir l'exemple fourni sur la page de la fonction password_hash()
// pour savoir d'où cela provient.
$pass = "toto";
$passhash = password_hash($pass, PASSWORD_BCRYPT);

if (password_verify($pass, $passhash)) {
    echo 'Toto est valide !';
} else {
    echo 'Toto est invalide.';
}