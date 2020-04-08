<?php
require '../config/config.php';
require '../models/connect.php';

$db = connect();

if(empty($_POST['nomProduit']) || empty($_POST['prix']) || $_POST['cat'] == '---') {
    header('Location: ../../products.php?empty=true');
}

if(isset($_POST['nomProduit']) && isset($_POST['prix'])) {
    $nomProd = htmlspecialchars(trim($_POST['nomProduit']));
    $prix = htmlspecialchars(trim(is_numeric($_POST['prix'])));
}
// Vérification si le produit existe
$sqlExiste = "SELECT COUNT(*) as nb 
    FROM products 
    WHERE products.name = :nomProdx 
    AND products.price = :prixProdx";

$reqVerif = $db->prepare($sqlExiste);
$reqVerif->bindParam(":nomProdx", $nomProd);
$reqVerif->bindParam(":prixProdx", $prix);
$reqVerif->execute();

$nb = $reqVerif->fetchObject();

if($nb->nb == 0) {
    $insertProd = "INSERT INTO () VALUES ()";
}
