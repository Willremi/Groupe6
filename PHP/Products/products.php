<?php
require_once 'src/views/elements/head.php';
require_once 'src/views/elements/footer.php';
require 'src/config/config.php';
require 'src/models/connect.php';

$db = connect();

head();

$sqlSelect = "SELECT products.id AS idProd, products.name AS nomProd, products.price AS prixProd, categories.name AS nomCat FROM products 
INNER JOIN categories ON products.category_id = categories.id";

$reqSelect = $db->prepare($sqlSelect);
$reqSelect->execute();

$listProd = array();

while ($data = $reqSelect->fetchObject()) {
	array_push($listProd, $data);
}
// var_dump($listProd);
?>

	<h2>Products</h2>

	<form action="" method="post">
		<div class="form-row">
		<div class="form-group col-md-3">
			<label for="nomProd">Nom du produit : </label>
			<input type="text" name="nomProduit" id="nomProd" class="form-control">
			</div>
			<div class="form-group col-md-3">
			<label for="prixProd">Prix du produit : </label>
			<input type="text" name="prix" id="prixProd" class="form-control">
			</div>
			<div class="form-group col-md-3">
				<label for="selCat">Sélectionnez la catégorie </label>
				<select name="cat" id="selCat" class="custom-select">
					<option value="">1</option>
					<option value="">2</option>
					<option value="">3</option>
				</select>
			</div>
			
			<button type="submit" class="btn btn-success">Ajouter</button>
			
		</div>
	</form>

	<table class="table table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Price</th>
			<th scope="col">Category</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
			<?php foreach($listProd as $produit) { ?>
			<tr>
				<th scope="row"><?= $produit->idProd; ?></th>
				<td><?= $produit->nomProd; ?></td>
				<td><?= $produit->prixProd; ?></td>
				<td><?= $produit->nomCat; ?></td>
			
				<td>
				<a href="#"><button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button></a>
				<a href="#"><button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button></a>
				<a href="#"><button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button></a>
				</td>
				<?php } ?>
			</tr>
		<!-- <tr>

			<th scope="row">1</th>
			<td>LG P880 4X HD</td>
			<td>336</td>
			<td>Fashion</td>
			<td>
				<a href="#"><button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button></a>
				<a href="#"><button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button></a>
				<a href="#"><button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button></a>
			</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Google Nexus 4</td>
			<td>299</td>
			<td>Electronics</td>
			<td>
				<a href="#">
<button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button>
				</a>
				<a href="#">
					<button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button>
				</a>
				<a href="#">
					<button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button>
				</a>
			</td>
		</tr>
		<tr>
			<th scope="row">3</th>
			<td>Samsung Galaxy S4</td>
			<td>600</td>
			<td>Motors</td>
			<td>
				<a href="#">
					<button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button>
				</a>
				<a href="#">
					<button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button>
				</a>
				<a href="#">
					<button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button>
				</a>
			</td>
		</tr>

		<tr>
			<th scope="row">3</th>
			<td>Bench Shirt</td>
			<td>29</td>
			<td>Fashion</td>
			<td>
				<a href="#">
					<button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button>
				</a>
				<a href="#">
					<button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button>
				</a>
				<a href="#">
					<button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button>
				</a>
			</td>
		</tr> -->
		</tbody>
	</table>
</div>
<?php

footer();
