<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';
// head();

$db = connect();

if(empty($_GET['nomProd']) || empty($_GET['prixProd']) || empty($_GET['descProd'])) {
    header('Location: modifProd.php?empty=true');
}

if(isset($_GET['nomProd']) && isset($_GET['prixProd']) && isset($_GET['descProd'])) {
    $nomUp = htmlspecialchars(trim($_GET['nomProd']));
    $prixUp = htmlspecialchars(trim($_GET['prixProd']));
    $descUp = htmlspecialchars(trim($_GET['descProd']));
}
$idUp = $_GET['idProd'];
$catUp = $_GET['catProd'];

// echo $idUp.'<br>'.$nomUp.'<br>'.$prixUp.'<br>'.$catUp.'<br>';

$sqlCat = "SELECT id FROM categories WHERE name = :catUp";

$reqCat = $db->prepare($sqlCat);
$reqCat->bindParam(':catUp', $catUp);
$reqCat->execute();

$idCat = $reqCat->fetchObject();
$cat = $idCat->id;

// var_dump($cat);

$sqlUp = "UPDATE products SET name = :nameUp, description = :descripUp, price = :priceUp, category_id = :catUp, modified = NOW() WHERE id = :idProd";

$reqUp = $db->prepare($sqlUp);
$reqUp->bindParam(":nameUp", $nomUp);
$reqUp->bindParam(":descripUp", $descUp);
$reqUp->bindParam(":priceUp", $prixUp);
$reqUp->bindParam(":catUp", $cat);
$reqUp->bindParam(":idProd", $idUp);
$reqUp->execute();

if ($reqUp->rowCount()>0) {
    header('Location: ../../products.php');
}


?>

<hr>
<a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();