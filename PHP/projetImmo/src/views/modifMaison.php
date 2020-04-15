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
    <div class="form-group">
        <label for="nbPieces">Nombre de pièce(s) : </label>
        <input type="text" name="nbPieces" id="nbPieces" value="<?= $dataHouse->nbPiece; ?>">
    </div>
    <div class="form-group">
        <label for="surfHouse">Surface de la maison :</label>
        <input type="text" name="surfHouse" id="surfHouse" value="<?= $dataHouse->surfMaison; ?>">
        <label for="surfArea">Surface du terrain :</label>
        <input type="text" name="surfArea" id="surfArea" value="<?= $dataHouse->surfArea; ?>">
    </div>
    <div class="form-group">
        
    </div>
    <div class="form-group">
        <label for="numRue">Numéro de la rue : </label>
        <input type="text" name="numRue" id="numRue" value="<?= $dataHouse->Rue; ?>">
        <label for="nomRue">Adresse : </label>
        <input type="text" name="nomRue" id="nomRue" value="<?= $dataHouse->Adresse; ?>">
    </div>
    <div class="form-group">
        <label for="cpVille">Code postal : </label>
        <input type="text" name="cpVille" id="cpVille" value="<?= $dataHouse->cp; ?>">
        <label for="nomVille">Ville : </label>
        <input type="text" name="nomVille" id="nomVille" value="<?= $dataHouse->Ville; ?>">
    </div>
    <div class="form-group">
        <label for="resumeMaison">Introduction : </label>
        <input type="text" name="resumeMaison" id="resumeMaison" value="<?= $dataHouse->intro; ?>">
    </div>
    <div class="form-group">
        <label for="typeDisp">Disponibilité : </label>
        <select name="typeDisp" id="typeDisp">
        <?php 
              while($dataType = $reqType->fetchObject()) {
                ?>
                <option value="<?= $dataType->idType ?>"><?= $dataType->nomType ?></option>
            <?php
              }
              ?>
        </select>
    </div>
    <button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button>
</form>
<a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();