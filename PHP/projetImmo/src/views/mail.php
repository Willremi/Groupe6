<?php 
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();


// Le message
$message = $_POST['message'];

$headers = 'From: '.$_POST['_replyto'].'X-Mailer: PHP/' . phpversion();

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('willremi@gmail.com', 'Mon Sujet :'.$_POST['Subject'], $message, $headers);


// if (isset($_POST['message'])) {
//         $position_arobase = strpos($_POST['_replyto'], '@');
//         if ($position_arobase === false)
//             echo '<p>Votre email doit comporter un arobase.</p>';
//         else {
//             $retour = mail('willremi@gmail.com', 'Envoi depuis la page Contact par '.$_POST['name'], $_POST['message'], 'From: ' . $_POST['_replyto']);
//             if ($retour) {
//                 echo '<p>Votre message a été envoyé.</p>';
//             }
//             else {
//                 echo '<p>Erreur.</p>';
//             }
//         }
//     }

footer();