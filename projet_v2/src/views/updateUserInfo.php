<?php
$nomUser = htmlspecialchars(trim($_POST['userName']));

$prenomUser = htmlspecialchars(trim($_POST['userFirstName']));

$pseudoUser = htmlspecialchars(trim($_POST['userPseudo']));

$mailUser = htmlspecialchars(trim($_POST['userMail']));

$numRue = htmlspecialchars(trim($_POST['numRue']));

$nomRue = htmlspecialchars(trim($_POST['nomRue']));

$nomRue2 = htmlspecialchars(trim($_POST['nomRue2']));

$cpVille = htmlspecialchars(trim($_POST['cpVille']));

$nomVille = htmlspecialchars(trim($_POST['nomVille']));
// var_dump($nomVille);

$login = $_SESSION['login'];

$user = new User($db);
$user->setPseudo($login);
$data = $user->selectByPseudo();

$idUser = $data->idUser;
// var_dump($idUser);
$user->setNom($_POST['userName']);
$user->setPrenom($_POST['userFirstName']);
$user->setPseudo($_POST['userPseudo']);
$user->setMail($_POST['userMail']);
$user->setNumRue($_POST['numRue']);
$user->setAdress($_POST['nomRue']);
$user->setComplementAdress($_POST['nomRue2']);
$user->setCodePostal($_POST['cpVille']);
$user->setVille($_POST['nomVille']);



$sqlUp = "UPDATE user 
          SET nomUser = :nomUserUp, 
              prenomUser = :prenomUserUp, 
              pseudoUser = :pseudoUserUp, 
              mailUser = :mailUserUp, 
              numRue = :numRueUp, 
              nomRue1 = :nomRueUp, 
              nomRue2 = :nomRueCompUp, 
              cpVille = :cpVilleUp, 
              nomVille = :nomVilleUp 
          WHERE idUser = :idUserUp LIMIT 1";

$reqUp = $db->prepare($sqlUp);
$reqUp->bindParam(':nomUserUp', $nomUser);
$reqUp->bindParam(':prenomUserUp', $prenomUser);
$reqUp->bindParam(':pseudoUserUp', $pseudoUser);
$reqUp->bindParam(':mailUserUp', $mailUser);
$reqUp->bindParam(':numRueUp', $numRue);
$reqUp->bindParam(':nomRueUp', $nomRue);
$reqUp->bindParam(':nomRueCompUp', $nomRue2);
$reqUp->bindParam(':cpVilleUp', $cpVille);
$reqUp->bindParam(':nomVilleUp', $nomVille);
$reqUp->bindParam(':idUserUp', $idUser);
$reqUp->execute();


if($reqUp->rowCount() > 0) {
    // header('Location: compte?modif=OK');
    echo '<meta http-equiv="refresh" content="0;URL=/?modif=OK">';
    
} else {
    echo 'non réussi';
}

?>
<a href="/"><button type="button" class="btn btn-danger">Retour</button></a>