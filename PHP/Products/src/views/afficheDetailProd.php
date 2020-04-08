<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';
head();

$db = connect();

$idProd = $_GET['id'];

$sqlDetailProd = "SELECT products.id AS idProd, 
products.name AS nom,  
products.description AS descrip, 
products.price AS prix,
categories.name AS categorie, 
DATE_FORMAT(products.created, '%d/%m/%Y à %H:%i') AS dateAjout
FROM products
INNER JOIN categories ON products.category_id = categories.id
WHERE products.id =".$idProd;

$reqDet = $db->prepare($sqlDetailProd);
$reqDet->execute();
$data = $reqDet->fetchObject();
?>
<h2>Détails du Produit</h2>

<div class="card">
    <div class="card-body">
    <p class="card-text">ID du produit : <?= $data->idProd ?></p>
        <p class="card-text">Nom du description : <?= $data->nom; ?></p>
        <p class="card-text">Description du produit : <?= $data->descrip; ?></p>
        <p class="card-text">Prix : <?= $data->prix; ?> €</p>
        <p class="card-text">Catégorie : <?= $data->categorie; ?></p>
        <p class="card-text">Date d'Ajout : <?= $data->dateAjout; ?></p>
    </div>
</div>
<hr>
<a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?
footer();