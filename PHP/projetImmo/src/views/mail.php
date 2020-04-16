<?php 
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();


// Le message
$message = $_POST['message'];



if (isset($_POST['message']) && isset($_POST['_replyto'])) {
    $headers = 'From: '.$_POST['_replyto'].'X-Mailer: PHP/' . phpversion();

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envoi du mail
mail('willremi@gmail.com', 'Mon Sujet :'.$_POST['Subject'], $message, $headers);

echo 'Votre message a été envoyé';
}

?>
<a href="contact.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();