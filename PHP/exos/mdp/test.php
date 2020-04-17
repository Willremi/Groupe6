<?php
// Voir l'exemple fourni sur la page de la fonction password_hash()
// pour savoir d'où cela provient.
$pass = "azertyu";
$hash = '$2y$10$nMiwTI4M82/s5.DOmH6Tz.kAXMChkCf/h9J8ToHJEd2Mt6DkxLqIa';


if (password_verify($pass, $hash)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}