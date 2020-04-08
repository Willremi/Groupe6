<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';
head();

$db = connect();

$idProd = $_GET['id'];

$sqlProd = "SELECT products.id AS idProd, 
products.name AS nom,  
products.description AS descrip, 
products.price AS prix,
categories.name AS categorie 
FROM products
INNER JOIN categories ON products.category_id = categories.id
WHERE products.id=".$idProd;

$reqDet = $db->prepare($sqlProd);
$reqDet->execute();
$data = $reqDet->fetchObject();

$sqlCat = "SELECT * FROM categories";
$reqCat = $db->prepare($sqlCat);
$reqCat->execute();

?>
<h2>Modifier votre produit</h2>
<form action="" method="get">
    <div class="form-group">
    <label for="idProd">ID du produit :</label>
    <input type="text" name="idProd" id="idProd" class="d-none" value="<?= $data->idProd; ?>"><?= $data->idProd; ?>
    </div>
    <div class="form-group">
        <label for="nomProd">Nom du produit :</label>
        <input type="text" name="nomProd" id="nomProd" class="d-none" value="<?= $data->nom; ?>"><?= $data->nom; ?>
    </div>
    <div class="form-group">
        <label for="prixProd">Prix du produit :</label>
        <input type="text" name="prixProd" class="d-none" id="prixProd" value="<?= $data->prix; ?>"><?= $data->prix; ?> €
    </div>
    <div class="form-group">
        <label for="catProd">Catégorie :</label>
        <select name="catProd" id="catProd" class="form-control">
            <?php 
            $listSeletCat = array();
            while($dataCat = $reqCat->fetchObject()) {
                array_push($listSeletCat, $dataCat);
            }
            foreach ($listSeletCat as $cat) {
                ?>
            <option value=""></option>
            <?php
            }
            ?>
        </select>
    </div>
</form>

<hr>
<a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?
footer();