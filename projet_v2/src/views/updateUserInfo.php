<?php
$nomUser = htmlspecialchars(trim($_GET['userName']));
$prennomUser = htmlspecialchars(trim($_GET['userFirstName']));
$pseudoUser = htmlspecialchars(trim($_GET['userPseudo']));
$mailUser = htmlspecialchars(trim($_GET['userMail']));

$mdpUser = password_hash(htmlspecialchars(trim($_GET['userMdp'])), PASSWORD_BCRYPT);


$numRue = htmlspecialchars(trim($_GET['numRue']));
$nomRue = htmlspecialchars(trim($_GET['nomRue']));
$nomRue2 = htmlspecialchars(trim($_GET['nomRue2']));
$cpVille = htmlspecialchars(trim($_GET['cpVille']));
$nomVille = htmlspecialchars(trim($_GET['nomVille']));

$nomLogin = $_SESSION['login'];

?>
<a href="gererMesBiens.php"><button type="button" class="btn btn-danger">Retour</button></a>