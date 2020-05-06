<?php
$login = $_SESSION['login'];

$SelUser = "SELECT nomUser AS Nom, 
                  prenomUser AS Prénom, 
                  pseudoUser AS Pseudo, 
                  mailUser AS Email, 
                  mdpUser AS Mdp, 
                  numRue AS NumeroRue, 
                  nomRue1 AS Adresse, 
                  nomRue2 AS AdresseCompl, 
                  cpVille AS CodePostal, 
                  nomVille AS Ville
           FROM user WHERE pseudoUser = :pseudo";

$reqUser = $db->prepare($SelUser);
$reqUser->bindParam(':pseudo', $login);
$reqUser->execute();

$data = $reqUser->fetchObject();
// var_dump($data);

?>
<div class="container-fluid">
    <h1>Modifier les informations de votre compte</h1>

    <form action="<?= $router->generate('updateUserInfo') ?>" method="get">
        
    </form>
</div>