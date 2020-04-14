<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

 ?>
<h2>Ajout un bien</h2>
<form method="post">
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
  
  <button class="btn btn-primary" type="submit">Ajouter</button>
</form>


<?php
footer();