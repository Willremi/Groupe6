<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

$idMaison = $_GET['id'];
var_dump($idMaison);

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
<h1><?= $data->Nom ?></h1>
<div class="col-sm-12 mb-5">
<div class="card">
  <img src="../../public/img/<?= $data->photo ?>" class="card-img-top" alt="<?= $data->Nom ?>">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();