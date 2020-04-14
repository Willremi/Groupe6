<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

?>
<h2>Ajout une agence</h2>
<form action="addAgence.php" method="post">
  <div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="nomAgence">Nom de l'agence</label>
        <input type="text" class="form-control" id="nomAgence" name="nomAgence">
    </div>
  </div>
  <div class="form-row">
      <div class="col-md-4 mb-3">
      <label for="telAgence">Téléphone de l'agence</label>
      <input type="text" name="telAgence" id="telAgence" class="form-control">
      </div>
      <div class="col-md-4 mb-3">
      <label for="mailAgence">Mail de l'agence</label>
      <input type="text" name="mailAgence" id="mailAgence" class="form-control">
      </div>
  </div>
  <div class="form-row">
    <div class="col-md-2 mb-3">
        <label for="numRueAgence">Numéro de la rue</label>
        <input type="text" name="numRueAgence" id="numRueAgence" class="form-control">
    </div>
    <div class="col-md-4 col-mb-3">
        <label for="nomRueAgence">Nom de la rue</label>
        <input type="text" name="nomRueAgence" id="nomRueAgence" class="form-control">
    </div>
    <div class="col-md-2 col-mb-3">
        <label for="cpAgence">Code postal</label>
        <input type="text" name="cpAgence" id="cpAgence" class="form-control">
    </div>
    <div class="col-md-4 col-mb-3">
        <label for="villeAgence">Ville</label>
        <input type="text" name="villeAgence" id="villeAgence" class="form-control">
    </div>
      
  </div>
  <button class="btn btn-primary" type="submit">Ajouter</button>
  <a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Annuler</button></a>
</form>

<?php
footer();