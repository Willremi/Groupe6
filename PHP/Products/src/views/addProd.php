<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();
$db = connect();

if(empty($_POST['nomProduit']) || empty($_POST['prix']) || $_POST['cat'] == '---') {
    header('Location: ../../products.php?empty=true');
}

if(isset($_POST['nomProduit']) && isset($_POST['prix'])) {
    $nomProd = htmlspecialchars(trim($_POST['nomProduit']));
    $prix = htmlspecialchars(trim($_POST['prix']));
    $description = htmlspecialchars(trim($_POST['descript']));
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
    $categories = $_POST['cat'];

    $sqlIdCat = "SELECT * FROM categories WHERE name = :nameCat";
    $reqCate = $db->prepare($sqlIdCat);
    $reqCate->bindParam(':nameCat', $categories);
    $reqCate->execute();

    $data = $reqCate->fetchObject();
    $idCat = $data->id;


    $insertProd = "INSERT INTO products(name, description, price, category_id, created) VALUES (:insertNomProd, :insertDescProd, :insertPrixProd, :insertCatProd, NOW())";
    $reqProd = $db->prepare($insertProd);
    $reqProd->bindParam(':insertNomProd', $nomProd);
    $reqProd->bindParam(':insertDescProd', $description);
    $reqProd->bindParam(':insertPrixProd', $prix);
    $reqProd->bindParam(':insertCatProd', $idCat);
    $reqProd->execute();

    // $lastInsertIdProd = $db->lastInsertId();
}
?>
Vous avez ajouté votre produit
<a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php 
footer();