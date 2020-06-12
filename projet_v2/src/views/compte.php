<?php  
$login = $_SESSION['login'];

$user = new User($db);
$user->setPseudo($login);
$data = $user->selectByPseudo();

?>
<div class="container-fluid">
    <h1>Compte utilisateur</h1>
    <div class="offset-md-4 col-md-4">
        <p>Nom : <?= $data->Nom ?></p>
        <p>Prénom : <?= $data->Prénom ?></p>
        <p>Pseudo : <?= $data->Pseudo ?></p>
        <!-- <p>Mdp : <?= $data->Mdp ?></p> -->
        <p>Email : <?= $data->Email ?></p>
        <p>Adresse : <?= $data->NumeroRue ?> rue <?= $data->Adresse ?></p>
        <p>Complément d'adresse : <?= $data->AdresseCompl ?></p>
        <p>Code Postal : <?= $data->CodePostal ?></p>
        <p>Ville : <?= $data->Ville ?></p>
        <a href="<?= $router->generate('Modification') ?>"><button type="submit" class="btn btn-warning">Modifier</button></a>
    </div>
</div>

