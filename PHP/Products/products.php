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

	<a href="src/views/afficheProd.php"><button type="button" class="btn btn-primary">Ajouter un produit</button></a>

	<table class="table table-hover mt-3">
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
				<a href="src/views/afficheDetailProd.php"><button class="btn btn-primary" type="submit"><i class="fa fa-bars" aria-hidden="true"></i> Lire</button></a>
				<a href="src/views/modifProd.php"><button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button></a>
				<a href="#"><button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button></a>
				</td>
				<?php } ?>
			</tr>

		</tbody>
	</table>
	<a href="src/views/afficheProd.php"><button type="button" class="btn btn-primary">Ajouter un produit</button></a>

<?php

footer();
