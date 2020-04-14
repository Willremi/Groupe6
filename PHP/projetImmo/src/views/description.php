<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

$idMaison = $_GET['id'];
// var_dump($idMaison);

$sqlHouseDetail = "SELECT maison.idMaison AS ID, 
maison.nomMaison AS Nom, 
maison.resumeMaison AS intro, 
maison.prixMaison AS Prix, 
maison.nbPiece AS nbPiece, 
maison.surfMaison AS surfMaison, 
maison.surfArea AS surfArea, 
maison.numRue AS Rue, 
maison.nomRue AS Adresse, 
maison.cpVille AS cp, 
maison.nomVille AS Ville, 
maison.photoMaison AS photo, 
agence.nomAgence AS Agence, 
type.nomType AS Type
FROM maison 
INNER JOIN agence ON agence.idAgence = maison.agence_idAgence 
INNER JOIN type ON type.idType = maison.type_idType WHERE maison.idMaison = ".$idMaison;

$reqDet = $db->prepare($sqlHouseDetail);
$reqDet->execute();
$data = $reqDet->fetchObject();

?>
<div class="col-sm-12 mt-3 mb-5">
<div class="card">
<h1 class="card-title"><?= $data->Nom ?></h1>
  <img src="../../public/img/<?= $data->photo ?>" class="card-img-top" alt="<?= $data->Nom ?>">
  <div class="card-body">
    <div class="row">
    <p class="card-text col-4">Prix : <?= $data->Prix ?> €</p>
    <p class="card-text col-4">Nombre de pièce(s) : <?= $data->nbPiece ?></p>
    </div>
    <div class="row">
        <p class="card-text col-4">Surface de la maison : <?= $data->surfMaison ?> m²</p>
        <p class="card-text col-4">Surface du terrain : <?= $data->surfArea ?> m²</p>
    </div>
    <div class="row">
        <p class="card-text col-6">Adresse de la maison : <?php echo $data->Rue.' rue '.$data->Adresse.', '.$data->cp.' '.$data->Ville; ?></p>
    </div>
    <hr>
    <div class="row">
        <p class="card-text col-12">Résumé : <?= $data->intro ?></p>
    </div>
    <hr>
    <div class="row">
    <p class="card-text col-4">Agence : <?= $data->Agence ?></p>
    <p class="card-text col-4">Disponibilité : <?= $data->Type ?></p>
    </div>
  </div>
  
</div>
</div>
<a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();