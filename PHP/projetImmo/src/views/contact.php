<?php 
session_start();
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';



    if(isset($_SESSION['login'])) {
        $pseudo = $_SESSION['login'];
    } else {
        
        $pseudo = '';
    }


head();

$db = connect();


?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6  col-lg-6  col-xl-6">
        <form action="mail.php" method="POST">
            <div class="p pb-3"><strong>Pour nous contacter </strong></div>
            <div class="row mb-3">
            <div class="col">
            <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
            <input class="form-control" type="text" name="name" placeholder="Nom" required="required"/>
            </div>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col">
            <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
            <input class="form-control" type="text" name="Subject" placeholder="Sujet" required="required"/>
            </div>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col">
            <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
            </div>
            </div>
            </div>
            <div class="row mb-3">
            <div class="col">
            <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Votre Message" required="required"></textarea>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
            <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
            </div>
        </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6  col-lg-6  col-xl-6 mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10165.462850644237!2d2.8071097344365343!3d50.434288369956704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd307d659025fd%3A0xb92f8bd91a43659a!2zQ29sbMOoZ2UgSmVhbiBKYXVyw6hz!5e0!3m2!1sfr!2sfr!4v1586439142378!5m2!1sfr!2sfr" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
<?php
footer();