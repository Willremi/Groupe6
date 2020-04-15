<?php
require '../config/config.php';
require '../models/connect.php';

$db = connect();

$idMaison = $_GET['id'];
// var_dump($idMaison);

$sqlDel = "DELETE FROM maison WHERE idMaison = :idSupp LIMIT 1";
$reqDel = $db->prepare($sqlDel);
$reqDel->bindParam(":idSupp", $idMaison);
$reqDel->execute();

if($reqDel->rowCount() == 1) {
    header('Location: gererMesBiens.php?Delete=success');
}