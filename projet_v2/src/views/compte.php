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
    $nbCommentaire = count($commentaireUser);
    $commentaire = $commentaireUser[0]['textComment'];
    $dateCreation = $commentaireUser[0]['dateCreation'];
    $date = date('d/m/Y à H:i', strtotime($dateCreation));
    $serieId = (int)$commentaireUser[0]['serie_id'];
    
    $serie->setId($serieId);
    $dataSerie = $serie->selectById();
    $idApiSerie = (int)$dataSerie->apiSerieId;
    $nomSerie = $dataSerie->nomSerie;
    
    
    // dump($commentaireUser[0]['textComment']);

    if($commentaire):
    ?>
    <h2>Votre activité sur le site</h2>
    <hr>
    <div class="row">
        <div class="ml-4">
            <p><strong>Dernier commentaire : </strong><?= $nomSerie ?> (posté le <?= $date ?>) <a href="serie?id=<?= $idApiSerie ?>#commentaire" target="_blank">Voir le commentaire</a></p>
            <p><strong>Nombre de commentaires sur le site : </strong><?= $nbCommentaire ?></p>
        </div>

        
        
    </div>
    <?php endif; ?>
</div>

