<?php
// Voir l'exemple fourni sur la page de la fonction password_hash()
// pour savoir d'où cela provient.
$pass = "qsdf";
// $passhash = password_hash($pass, PASSWORD_BCRYPT);
$passhash = "$2y$10$8EZXDVLjTaoKXswIAFlaGOps8h8jah.wTGUUBZv2zx/7.j8LU.hZW";

if (password_verify($pass, $passhash)) {
    echo 'Toto est valide !';
} else {
    echo 'Toto est invalide.';
}

echo '<hr>';

if(password_verify('qsdfghjklm', '$2y$10$Xe2ETW6O.zn2bl/WsfCyZ.iCdaOZve04obpsKoLrTULxN1z9Hn.s.')) {
    echo 'ok c\'est bon';
}