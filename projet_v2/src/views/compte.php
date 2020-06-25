<?php  
$login = $_SESSION['login'];

use App\Models\User;
use App\Models\Series;
use App\Models\Comments;

$user = new User($db);
$serie = new Series($db);
$comments = new Comments($db);

$user->setPseudo($login);
$data = $user->selectByPseudo();

?>
<div class="container-fluid">
    <h1>Compte utilisateur</h1>
    <hr>
    <div class="row">
        <div class="col-md-2">
            <p>Nom : <?= $data->Nom ?></p>
            <p>Prénom : <?= $data->Prénom ?></p>
            <p>Pseudo : <?= $data->Pseudo ?></p> 
            <p>Email : <?= $data->Email ?></p>
        </div>
        <div class="col-md-2">
            <p>Adresse : <?= $data->NumeroRue ?> rue <?= $data->Adresse ?></p>
            <?php 
            if($data->AdresseCompl):
            ?>
                <p>Complément d'adresse : <?= $data->AdresseCompl ?></p>
            
            <?php endif; ?>
            <p>Code Postal : <?= $data->CodePostal ?></p>
            <p>Ville : <?= $data->Ville ?></p>
        </div>
        <div class="offset-md-4">
            <a href="<?= $router->generate('Modification') ?>"><button type="submit" class="btn btn-warning">Modifier votre compte</button></a>
            <a href="<?= $router->generate('deleteUser') ?>"><button type="button" class="btn btn-danger">Supprimer votre compte</button></a>
        </div>
    </div> <!-- fin row -->
    <?php 
    $comments->setAuteur($login);
    $commentaireUser = $comments->selectByAuteur();
    $commentaire = $commentaireUser->textComment;
    $dateCreation = $commentaireUser->dateCreation;
    $date = date('d/m/Y à H:i', strtotime($dateCreation));
    $serieId = (int)$commentaireUser->serie_id;

    $serie->setId($serieId);
    $dataSerie = $serie->selectById();
    $idApiSerie = (int)$dataSerie->apiSerieId;
    $nomSerie = $dataSerie->nomSerie;
    // dump($nomSerie);
    if($commentaire):
    ?>
    <h2>Votre dernier commentaire</h2>
    <hr>
    <div class="row">
        <div class="ml-4 col-md-4">
        <p><strong>Série : </strong><?= $nomSerie ?></p>
        </div>
        <div class="col-md-4">
        <p><strong>Posté le : </strong><?= $date ?></p>
        </div>
        <div class="col-md-2">
        <p><strong>Liens : </strong>
        <a href="serie?id=<?= $idApiSerie ?>#commentaire" target="_blank">Voir le commentaire</a>
        </p>
        </div>
    </div>
    <?php endif; ?>
</div>

