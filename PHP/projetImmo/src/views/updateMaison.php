<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

// head();

$db = connect();

if(empty($_GET['nomMaison']) || empty($_GET['prixMaison']) || empty($_GET['nbPieces']) || empty($_GET['surfHouse']) || empty($_GET['surfArea']) || empty($_GET['numRue']) || empty($_GET['nomRue']) || empty($_GET['cpVille']) || empty($_GET['nomVille']) || empty($_GET['resumeMaison'])) {
    
    header('Location: gererMesBiens.php?empty=true');
    
}

if(isset($_GET['nomMaison']) && isset($_GET['prixMaison']) && isset($_GET['nbPieces']) && isset($_GET['surfHouse']) && isset($_GET['surfArea']) && isset($_GET['numRue']) && isset($_GET['nomRue']) && isset($_GET['cpVille']) && isset($_GET['nomVille']) && isset($_GET['resumeMaison'])) {
    $nomMaison = htmlspecialchars(trim($_GET['nomMaison']));
    $prixMaison = htmlspecialchars(trim($_GET['prixMaison']));
    $nbPieces = htmlspecialchars(trim($_GET['nbPieces']));
    $surfHouse = htmlspecialchars(trim($_GET['surfHouse']));
    $surfArea = htmlspecialchars(trim($_GET['surfArea']));
    $numRue = htmlspecialchars(trim($_GET['numRue']));
    $nomRue = htmlspecialchars(trim($_GET['nomRue']));
    $cpBien = htmlspecialchars(trim($_GET['cpVille']));
    $villeBien = htmlspecialchars(trim($_GET['nomVille']));
    $resumeMaison = htmlspecialchars(trim($_GET['resumeMaison']));
}
$idUp = $_GET['idMaison'];
$typeDisp = $_GET['typeDisp'];

// echo $nomMaison.'<br>';
// echo $prixMaison.'<br>';
// echo $nbPieces.'<br>';
// echo $surfHouse.'<br>';
// echo $surfArea.'<br>';
// echo $numRue.'<br>';
// echo $nomRue.'<br>';
// echo $cpBien.'<br>';
// echo $villeBien.'<br>';
// echo $resumeBien.'<br>';
// echo $idUp.'<br>';
// echo $typeDisp.'<br>';

$sqlUp = "UPDATE maison SET nomMaison = :nomBienUp, resumeMaison = :resumeBienUp, prixMaison = :prixBienUp, nbPiece = :nbPieceUp, surfMaison = :surfHouseUp, surfArea = :surfAreaUp, numRue = :numRueUp, nomRue = :nomRueUp, cpVille = :cpVilleUp, nomVille = :nomVilleUp, type_idType = :idTypeUp";

$reqUp = $db->prepare($sqlUp);

?>
<a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Retour</button></a>
<?php
footer();