
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


?>
<div class="container-fluid">
    <h1>Compte utilisateur</h1>
    <div class="offset-sm-5">
        <p>Nom : <?= $data->Nom ?></p>
        <p>Prénom : <?= $data->Prénom ?></p>
        <p>Pseudo : <?= $data->Pseudo ?></p>
        <!-- <p>Mdp : <?= $data->Mdp ?></p> -->
        <p>Email : <?= $data->Email ?></p>
        <p>Adresse : <?= $data->NumeroRue ?> rue <?= $data->Adresse ?></p>
        <p>Complément d'adresse : <?= $data->AdressCompl ?></p>
        <p>Code Postal : <?= $data->CodePostal ?></p>
        <p>Ville : <?= $data->Ville ?></p>
    </div>
</div>
<?php
// var_dump($data);