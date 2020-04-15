<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

if(empty($_GET['nomBien']) || empty($_GET['prixBien']) || empty($_GET['nbPieces']) || empty($_GET['surfHouse']) || empty($_GET['surfArea']) || empty($_GET['numRue']) || empty($_GET['nomRue']) || empty($_GET['cpVille']) || empty($_GET['nomVille']) || empty($_GET['resumeBien']) || empty($_GET['imageBien'])) {
    
    header('Location: gererMesBiens.php?empty=true');
    
}

if(isset($_GET['nomBien']) && isset($_GET['prixBien']) && isset($_GET['nbPieces']) && isset($_GET['surfHouse']) && isset($_GET['surfArea']) && isset($_GET['numRue']) && isset($_GET['nomRue']) && isset($_GET['cpVille']) && isset($_GET['nomVille']) && isset($_GET['resumeBien']) && isset($_GET['imageBien'])) {
    $nomBien = htmlspecialchars(trim($_GET['nomBien']));
    $prixBien = htmlspecialchars(trim($_GET['prixBien']));
    $nbPiece = htmlspecialchars(trim($_GET['nbPiece']));
    $surfHouse = htmlspecialchars(trim($_GET['surfHouse']));
    $surfArea = htmlspecialchars(trim($_GET['surfArea']));
    $numRueBien = htmlspecialchars(trim($_GET['numRueBien']));
    $nomRueBien = htmlspecialchars(trim($_GET['nomRueBien']));
    $cpBien = htmlspecialchars(trim($_GET['cpBien']));
    $villeBien = htmlspecialchars(trim($_GET['villeBien']));
    $resumeBien = htmlspecialchars(trim($_GET['resumeBien']));
    $imageBien = htmlspecialchars(trim($_GET['imageBien']));
}

?>
<?php
footer();