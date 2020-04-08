<?php
require '../config/config.php';
require '../models/connect.php';

$db = connect();

if(empty($_POST['nomProduit']) || empty($_POST['prix']) || $_POST['cat'] == '---') {
    header('Location: ../../products.php?empty=true');
}