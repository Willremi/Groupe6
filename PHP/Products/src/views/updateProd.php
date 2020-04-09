<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';
head();

$db = connect();

if(empty($_GET['nomProd']) || empty($_GET['prixProd'])) {
    header('Location: modifProd.php?empty=true');
}

if(isset($_GET['nomProd']) && isset($_GET['prixProd'])) {
    $nomUp = htmlspecialchars(trim($_GET['nomProd']));
    $prixUp = htmlspecialchars(trim($_GET['prixProd']));
}
$idUp = $_GET['idProd'];
$cat = $_GET['catProd'];

echo $idUp.'<br>'.$nomUp.'<br>'.$prixUp.'<br>'.$catUp;



// $sqlUp = "UPDATE products SET name = :nameUp, price = :priceUp, category_id = :catUp, modified = NOW() WHERE id = :idProd";
?>

<hr>
<a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();