<?php
$login = $_SESSION['login'];

$user = new User($db);
$pseudoInput = $user->setPseudo($login);
$data = $user->selectByPseudo();

?>
<div class="container-fluid">
    <h1>Modifier les informations de votre compte</h1>
    
    <form action="<?= $router->generate('updateUserInfo') ?>" method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="userName">Nom</label>
                <input type="text" name="userName" id="userName" class="form-control" value="<?= $data->Nom ?>">
                
            </div>
            <div class="col-md-4 mb-3">
            <label for="userFirstName">Prénom</label>
                <input type="text" name="userFirstName" id="userFirstName" class="form-control" value="<?= $data->Prénom ?>">
            </div>
            <div class="col-md-4 mb-3">
            <label for="userPseudo">Pseudo </label>
                <input type="text" name="userPseudo" id="userPseudo" class="form-control" value="<?= $data->Pseudo ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="userMail">Email</label>
            <input id="userMail" class="form-control" type="text" name="userMail" value="<?= $data->Email ?>">
            </div>
            <!-- <div class="col-md-4 mb-3">
            <label for="userMdp">Mot de passe</label>
            <input id="userMdp" class="form-control" type="password" name="userMdp" value="<?= $data->Mdp ?>">
            </div> -->
        </div>
        <div class="form-row">
            <div class="col-md-2 mb-3">
                <label for="numRue">Numéro de la rue</label>
                <input id="numRue" class="form-control" type="text" name="numRue" value="<?= $data->NumeroRue ?>" placeholder="12, 12bis">
            </div>
            <div class="col-md-6 mb-3">
            <label for="nomRue">Adresse</label>
            <input id="nomRue" class="form-control" type="text" name="nomRue" value="<?= $data->Adresse ?>"> 
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="nomRue2">Complément d'adresse</label>
            <input id="nomRue2" class="form-control" type="text" name="nomRue2" value="<?= $data->AdresseCompl ?>" placeholder="bâtiment, Etage, Appartement...">
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
            <label for="cpVille">Code postal</label>
            <input id="cpVille" class="form-control" type="text" name="cpVille" value="<?= $data->CodePostal ?>"> 
            </div>
            <div class="col-md-3 mb-3">
            <label for="nomVille">Ville</label>
            <input id="nomVille" class="form-control" type="text" name="nomVille" value="<?= $data->Ville ?>"> 
            </div>
        </div>
        <button class="btn btn-warning" type="submit">Modifier</button>
        <button class="btn btn-danger" type="reset">Annuler</button>
    </form>
    
</div>