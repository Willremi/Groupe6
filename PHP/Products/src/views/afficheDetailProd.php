<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';
head();

$db = connect();

$sqlDetailProd = "SELECT products.id AS idProd,  
products.description AS description, 
products.price AS prix,
categories.name AS catégorie, 
DATE_FORMAT(products.created, '%d/%m/%Y à %H:%i') AS dateAjout
FROM products
INNER JOIN categories ON products.category_id = categories.id";

?>
<h2>Détails du Produit</h2>
<?
footer();