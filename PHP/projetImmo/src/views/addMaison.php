<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

if(empty($_POST['nomBien']) || empty($_POST['prixBien']) || empty($_POST['nbPiece']) || empty($_POST['surfHouse']) || empty($_POST['surfArea']) || empty($_POST['numRueBien']) || empty($_POST['nomRueBien']) || empty($_POST['cpBien']) || empty($_POST['villeBien'])) {
    
    header('Location: gererMesBiens.php?empty=true');
    
}

if(isset($_POST['nomBien']) && isset($_POST['prixBien']) && isset($_POST['nbPiece']) && isset($_POST['surfHouse']) && isset($_POST['surfArea']) && isset($_POST['numRueBien']) && isset($_POST['nomRueBien']) && isset($_POST['cpBien']) && isset($_POST['villeBien'])) {
    $nomBien = htmlspecialchars(trim($_POST['nomBien']));
    $prixBien = htmlspecialchars(trim($_POST['prixBien']));
    $nbPiece = htmlspecialchars(trim($_POST['nbPiece']));
    $surfHouse = htmlspecialchars(trim($_POST['surfHouse']));
    $surfArea = htmlspecialchars(trim($_POST['surfArea']));
    $numRueBien = htmlspecialchars(trim($_POST['numRueBien']));
    $nomRueBien = htmlspecialchars(trim($_POST['nomRueBien']));
    $cpBien = htmlspecialchars(trim($_POST['cpBien']));
    $villeBien = htmlspecialchars(trim($_POST['villeBien']));
}
 ?>

  <a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Annuler</button></a>


<?php
footer();