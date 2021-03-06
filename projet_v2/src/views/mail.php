<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['nom'])) {
    $nom = htmlspecialchars(trim($_POST['nom']));
}
if(isset($_POST['prenom'])) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
}
if(isset($_POST['email'])) {
    $email = htmlspecialchars(trim($_POST['email']));
}
if(isset($_POST['sujet'])) {
    $sujet = htmlspecialchars(trim($_POST['sujet']));
}
if(isset($_POST['message'])) {
    $messageForm = htmlspecialchars(trim($_POST['message']));
}
// var_dump($messageForm);

// PHP Mailer
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;      // Enable verbose debug output
    

    //Recipients
    $mail->setFrom($email, 'Fiche de contact RetroSérie');
    $mail->addAddress('willremi@yahoo.fr', 'Webmaster du site');     // Add a recipient
    $mail->addAddress('willremi@live.fr');
    // $mail->addReplyTo($email, $prenom.' '.$nom);
    // Content
    $mail->isHTML(true);    // Set email format to HTML
    $mail->Subject = $sujet; //.' de '.$prenom.' '.$nom;
    $mail->Body = '<p>'.$messageForm.'</p><br><p>'.$prenom.' '.$nom;
    

    $mail->send();
    echo '<p>Votre message a été envoyé</p>';
    echo '<a href="'.$router->generate('contact').'"><button>Retour</button></a>';
    
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Le message d'erreur : {$mail->ErrorInfo}";
}



?>