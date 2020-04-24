<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['nom'])) {
    $nom = htmlspecialchars(trim($_POST['nom']));
}
if(isset($_POST['prenom'])) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
}
if(isset($_POST['mail'])) {
    $email = htmlspecialchars(trim($_POST['mail']));
}
if(isset($_POST['sujet'])) {
    $sujet = htmlspecialchars(trim($_POST['sujet']));
}
if(isset($_POST['message'])) {
    $messageForm = htmlspecialchars(trim($_POST['message']));
}
var_dump($messageForm);

// PHP Mailer
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.live.com';     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;            // Enable SMTP authentication
    $mail->Username   = 'willremi@live.fr';                     // SMTP username
    $mail->Password   = 'S9RSaHOgNjz0lWUJ';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom($email, 'Formulaire de contact');
    $mail->addAddress('willremi@yahoo.fr', $nom.' '.$prenom);     // Add a recipient

    // Content
    $mail->isHTML(true);    // Set email format to HTML
    $mail->Subject = $sujet;
    $mail->Body = $messageForm;

    $mail->send();
    
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Le message d'erreur : {$mail->ErrorInfo}";
}



?>