<?php 
session_start();
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();


if(isset($_SESSION['login'])) {
    $pseudo = $_SESSION['login'];
} else {
    $pseudo = '';
}
?>
<form method="post" action="../../index.php">
    <fieldset>
        <legend>Connexion</legend>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputPseudo">Pseudo</label>
            <input type="text" name="inputPseudo" id="inputPseudo" class="form-control">
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword">Mot de Passe</label>
      <input type="password" class="form-control" id="inputPassword" name="inputPassword"> 
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </fieldset>
</form>
<hr>
<!-- <form method="POST" action="addAbonne.php">
    <fieldset>
        <legend>Inscription</legend>
        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputName">Nom</label>
            <input type="text" name="inputName" id="inputName" class="form-control">
        </div>
        <div class="form-group col-md-4">
        <label for="inputFirstname">Prénom</label>
            <input type="text" name="inputFirstname" id="inputFirstname" class="form-control">
        </div>
        <div class="form-group col-md-4">
        <label for="inputPseudo">Pseudo</label>
            <input type="text" name="inputPseudo" id="inputPseudo" class="form-control">
        </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Mot de Passe</label>
      <input type="password" class="form-control" id="inputPassword" name="inputPassword">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAdresse">Adresse</label>
    <input type="text" class="form-control" id="inputAdresse" name="inputAdresse">
  </div>
  <div class="form-group">
    <label for="inputAdresse2">Complément d'adresse</label>
    <input type="text" class="form-control" id="inputAdresse2" name="inputAdresse2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputZip">Code Postale</label>
      <input type="text" class="form-control" id="inputZip" name="inputZip">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="inputCity" name="inputCity">
    </div>
    
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
    </fieldset>
</form> -->

<?php
footer();