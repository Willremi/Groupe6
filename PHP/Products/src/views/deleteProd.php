<?php

require '../config/config.php';
require '../models/connect.php';


$db = connect();

$id = $_GET['id'];
// var_dump($id);

$sql = "DELETE FROM products WHERE id = :idDel LIMIT 1";
    $reqDel = $db->prepare($sql);
    $reqDel->bindParam(":idDel", $id);
    $reqDel->execute();
    

    if($reqDel->rowCount() == 1) {
        header('Location: ../../products.php?delete=success');
    }

/*if($_POST['positive']){
    // echo "vous avez utilisé le bouton1";
    $sql = "DELETE FROM products WHERE id = :idDel LIMIT 1";
    $reqDel = $db->prepare($sql);
    $reqDel->bindParam(":idDel", $id);
    $reqDel->execute();
    // header('Location: ../../products.php');
    
    }
    elseif($_POST['negative'])
    {
    header('Location: ../../products.php');
    }
    */
?>
<!-- <p>Voulez vous supprimez ce produit ?</p>

<form action="deleteProd.php" method="post">
<button type="submit" class="btn btn-success" value="oui" name="positive">OUI</button>
<a href="Location: ../../products.php"><button type="submit" class="btn btn-danger" name="negative" value="non">NON</button></a>
</form> -->

<hr>
<a href="../../products.php"><button type="button" class="btn btn-secondary">Retour</button></a>
