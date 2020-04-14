<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

$idMaison = $_GET['id'];
var_dump($idMaison);

$sqlHouse = "SELECT maison.idMaison AS ID, 
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

$reqHouse = $db->prepare($sqlHouse);
$reqHouse->execute();
$dataHouse = $reqHouse->fetchObject();

$sqlAgence = "SELECT * FROM agence";

$reqAgence = $db->prepare($sqlAgence);
$reqAgence->execute();
$dataAgence = $reqAgence->fetchObject();

$sqlType = "SELECT * FROM type";

$reqType = $db->prepare($sqlType);
$reqType->execute();
$dataType = $reqType->fetchObject();

?>
<h2>Modifier les informations de l'habitation</h2>

<?php
if(isset($_GET['empty'])){
    if($_GET['empty'] == true){
        ?>
        <div class="alert alert-danger" role="alert">
        Ces champs ne peuvent pas être vides.
        </div>
        <?php
    }
}
?>

<form action="updateMaison.php" method="get">
    <div class="form-group">
        <label for="idMaison">ID de la maison : </label>
        <input type="text" name="idMaison" id="idMaison" class="d-none" value="<?= $dataHouse->ID; ?>"><?= $dataHouse->ID; ?>
    </div>
    <div class="form-group">
        <label for="nomMaison">Nom de la maison : </label>
        <input type="text" name="nomMaison" id="nomMaison" value="<?= $dataHouse->Nom; ?>">
    </div>
    <div class="form-group">
        <label for="prixMaison">Prix de la maison : </label>
        <input type="text" name="prixMaison" id="prixMaison" value="<?= $dataHouse->Prix; ?>">
    </div>
</form>
<?php
footer();