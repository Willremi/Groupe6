<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';
head();

$db = connect();

$sqlCat = "SELECT * FROM categories";
$reqCat = $db->prepare($sqlCat);
$reqCat->execute();

?>
<h2>Ajouter votre nouvel article</h2>
<form action="addProd.php" method="post">
		<div class="form-row">
		<div class="form-group col-md-3">
			<label for="nomProd">Nom du produit : </label>
			<input type="text" name="nomProduit" id="nomProd" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="description">Description : </label>
                <input type="text" name="descript" id="description" class="form-control">
            </div>
			<div class="form-group col-md-3">
			<label for="prixProd">Prix du produit : </label>
			<input type="text" name="prix" id="prixProd" class="form-control">
			</div>
			<div class="form-group col-md-3">
				<label for="selCat">Sélectionnez la catégorie </label>
				<select name="cat" id="selCat" class="custom-select">
					<!-- <option value="">1</option>
					<option value="">2</option>
                    <option value="">3</option> -->
                    <!-- <option value="---">---</option> -->
                    <?php
                    $listCat = array();

                    while ($data = $reqCat->fetchObject()) {
                        array_push($listCat, $data);
                    }
                    foreach ($listCat as $categorie) {
                    ?>
                    
                    <option value="<?= $categorie->name; ?>"><?= $categorie->name; ?></option>
                    <?php
                    }
                    ?>
				</select>
			</div>
			
			<button type="submit" class="btn btn-success">Ajouter</button>
			
		</div>
    </form>
    <a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();