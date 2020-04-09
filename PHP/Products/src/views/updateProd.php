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

?>

<hr>
<a href="../../products.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();