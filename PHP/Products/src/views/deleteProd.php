<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();
$db = connect();

$id = $_GET['id'].'<br>';

?>
<p>Voulez vous supprimez ce produit ?</p>
<button type="submit" class="btn btn-success" value="oui">OUI</button>
<a href="../../products.php"><button type="submit" class="btn btn-danger">NON</button></a>
<?php 
// if () {

// }
?>
<hr>
<a href="../../products.php"><button type="button" class="btn btn-secondary">Retour</button></a>
<?php

footer();