<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

// Les agences
$sqlAgences = "SELECT * FROM agence";
$reqSelAgences =  $db->prepare($sqlAgences);
$reqSelAgences->execute();
// les types
$sqlTypes = "SELECT * FROM type";
$reqSelTypes =  $db->prepare($sqlTypes);
$reqSelTypes->execute();

 ?>
<h2>Ajout un bien</h2>
<form action="addBien.php" method="post">
  <div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="nomBien">Nom du bien</label>
        <input type="text" class="form-control" id="nomBien" name="nomBien">
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-2 mb-3">
        <label for="prixBien">Prix du bien</label>
        <input type="text" class="form-control" id="prixBien" name="prixBien">
    </div>
    <div class="col-md-2 mb-3">
        <label for="nbPiece">Nombre de pièces</label>
        <input type="text" class="form-control" id="nbPiece" name="nbPiece">   
    </div>
  
    <div class="col-md-4 mb-3">
        <label for="surfHouse">Surface de la maison</label>
        <input type="text" class="form-control" name="surfHouse" id="surfHouse">
    </div>
    <div class="col-md-4 mb-3">
        <label for="surfArea">Surface du terrain</label>
        <input type="text" class="form-control" name="surfArea" id="surfArea">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-2 mb-3">
        <label for="numRueBien">Numéro de la rue</label>
        <input type="text" name="numRueBien" id="numRueBien" class="form-control">
    </div>
    <div class="col-md-4 col-mb-3">
        <label for="nomRueBien">Nom de la rue</label>
        <input type="text" name="nomRueBien" id="nomRueBien" class="form-control">
    </div>
    <div class="col-md-2 col-mb-3">
        <label for="cpBien">Code postal</label>
        <input type="text" name="cpBien" id="cpBien" class="form-control">
    </div>
    <div class="col-md-4 col-mb-3">
        <label for="villeBien">Ville</label>
        <input type="text" name="villeBien" id="villeBien" class="form-control">
    </div>
  </div>
  <div class="form-row">
      <div class="col-md-6 mb-3">
          <label for="resumeBien">Résumé du bien</label>
          <textarea type="text" name="resumeBien" id="resumeBien" class="form-control" cols="30" rows="5"></textarea>
      </div>
      <div class="col-md-3 mb-3">
          <label for="nomAgence">Nom de l'agence</label>
          <select name="nomAgence" id="nomAgence">
              <?php 
              while($agence = $reqSelAgences->fetchObject()) {
                ?>
                <option value="<?= $agence->idAgence ?>"><?= $agence->nomAgence ?></option>
            <?php
              }
              ?>
          </select>
      </div>
      <div class="col-md-3  mb-3">
          <label for="nomType">Type</label>
          <select name="nomType" id="nomType">
              <?php 
              while($type = $reqSelAgences->fetchObject()) {
                ?>
                <option value="<?= $type->idType ?>"><?= $agence->nomType ?></option>
            <?php
              }
              ?>
          </select>
      </div>
      <div class="col-md-2 mb-3">
        <label for="imageBien">Photo du bien</label>
        <input type="text" name="imageBien" id="imageBien" class="form-control" placeholder="photo.jpg">
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Ajouter</button>
  <a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Annuler</button></a>
</form>


<?php
footer();