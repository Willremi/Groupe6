<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

// head();

$db = connect();

if(empty($_POST['nomBien']) || empty($_POST['prixBien']) || empty($_POST['nbPiece']) || empty($_POST['surfHouse']) || empty($_POST['surfArea']) || empty($_POST['numRueBien']) || empty($_POST['nomRueBien']) || empty($_POST['cpBien']) || empty($_POST['villeBien']) || empty($_POST['resumeBien']) || empty($_POST['imageBien'])) {
    
    header('Location: gererMesBiens.php?empty=true');
    
}

if(isset($_POST['nomBien']) && isset($_POST['prixBien']) && isset($_POST['nbPiece']) && isset($_POST['surfHouse']) && isset($_POST['surfArea']) && isset($_POST['numRueBien']) && isset($_POST['nomRueBien']) && isset($_POST['cpBien']) && isset($_POST['villeBien']) && isset($_POST['resumeBien']) && isset($_POST['imageBien'])) {
    $nomBien = htmlspecialchars(trim($_POST['nomBien']));
    $prixBien = htmlspecialchars(trim($_POST['prixBien']));
    $nbPiece = htmlspecialchars(trim($_POST['nbPiece']));
    $surfHouse = htmlspecialchars(trim($_POST['surfHouse']));
    $surfArea = htmlspecialchars(trim($_POST['surfArea']));
    $numRueBien = htmlspecialchars(trim($_POST['numRueBien']));
    $nomRueBien = htmlspecialchars(trim($_POST['nomRueBien']));
    $cpBien = htmlspecialchars(trim($_POST['cpBien']));
    $villeBien = htmlspecialchars(trim($_POST['villeBien']));
    $resumeBien = htmlspecialchars(trim($_POST['resumeBien']));
    $imageBien = htmlspecialchars(trim($_POST['imageBien']));
}

$agence = $_POST['nomAgence'];
// var_dump($agence);
// echo '<br>';
$type = $_POST['nomType'];
// var_dump($type);

$insertHouse = "INSERT INTO maison(nomMaison, resumeMaison, prixMaison, nbPiece, surfMaison, surfArea, numRue, nomRue, cpVille, nomVille, photoMaison, agence_idAgence, type_idType) VALUES(:insertNomMaison, :insertResumeMaison, :insertPrixMaison, :insertNbPiece, :insertSurfMaison, :insertSurfArea, :insertNumRue, :insertNomRue, :insertCpVille, :insertNomVille, :insertPhotoMaison, :idAgence, :idType)";

$reqInsert = $db->prepare($insertHouse);
$reqInsert->bindParam(':insertNomMaison', $nomBien);
$reqInsert->bindParam(':insertResumeMaison', $resumeBien);
$reqInsert->bindParam(':insertPrixMaison', $prixBien);
$reqInsert->bindParam(':insertNbPiece', $nbPiece);
$reqInsert->bindParam(':insertSurfMaison', $surfHouse);
$reqInsert->bindParam(':insertSurfArea', $surfArea);
$reqInsert->bindParam(':insertNumRue', $numRueBien);
$reqInsert->bindParam(':insertNomRue', $nomRueBien);
$reqInsert->bindParam(':insertCpVille', $cpBien);
$reqInsert->bindParam(':insertNomVille', $villeBien);
$reqInsert->bindParam(':insertPhotoMaison', $imageBien);
$reqInsert->bindParam(':idAgence', $agence);
$reqInsert->bindParam(':idType', $type);
$reqInsert->execute();

header('Location: gererMesBiens.php');
 ?>

  <a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Annuler</button></a>


<?php
footer();