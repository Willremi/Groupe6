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

<form action="updateProd.php" method="get">
    <div class="form-group">
    <label for="idProd">ID du produit :</label>
    <input type="text" name="idProd" id="idProd" class="d-none" value="<?= $data->idProd; ?>"><?= $data->idProd; ?>
    </div>
    <div class="form-group">
        <label for="nomProd">Nom du produit :</label>
        <input type="text" name="nomProd" id="nomProd" value="<?= $data->nom; ?>">
    </div>
    <div class="form-group">
        <label for="prixProd">Prix du produit :</label>
        <input type="text" name="prixProd" id="prixProd" value="<?= $data->prix; ?>"> €
    </div>
    <div class="form-group">
        <label for="descProd">Description du produit :</label>
        <input type="text" name="descProd" id="descProd" value="<?= $data->descrip ?>">
    </div>
    <div class="form-group">
        <label for="catProd">Catégorie :</label>
        <select name="catProd" id="catProd" class="">
            <?php 
            $listSeletCat = array();
            while($dataCat = $reqCat->fetchObject()) {
                array_push($listSeletCat, $dataCat);
            }
            foreach ($listSeletCat as $cat) {
                
                ?>
            <option <?php 
                if($cat->name == $data->categorie) {
                    echo 'value="'.$cat->name.'" selected';
                } else {
                    echo 'value="'.$cat->name.'"';
                }
            ?>><?= $cat->name; ?></option>
            <!-- <option value=""><?= $cat->name; ?></option> -->
            <?php
            }
            ?>
        </select>
    </div>
    <button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button>
</form>

<hr>
<a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?
footer();