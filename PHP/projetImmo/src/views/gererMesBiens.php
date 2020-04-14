<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

$sqlSelect = "SELECT * FROM maison INNER JOIN agence ON agence.idAgence = maison.agence_idAgence INNER JOIN type ON type.idType = maison.type_idType";
$reqSelect = $db->prepare($sqlSelect);
$reqSelect->execute();

$listeMaison = array();

while ($data = $reqSelect->fetchObject()) {
    array_push($listeMaison, $data);
}

 ?>

<h1>Gérer les biens</h1>
<?php
    if(isset($_GET['empty'])){
        if($_GET['empty'] == true){
            ?>
            <div class="alert alert-danger" role="alert">
            Ces champs ne peuvent pas être vides.
            </div>
            <?php
        }
    }
        ?>
<a href="ajoutMaison.php"><button type="button" class="btn btn-primary">Ajouter un bien</button></a>
<div class="row">
        <h2>Voici une sélection de nos biens immobiliers </h2>
    </div>

    <div class="card-group">
        <?php
            foreach ($listeMaison as $maison) {
                
            
        ?>


        <table class="table mt-5">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du bien</th>
                <th scope="col">Prix du bien</th>
                <th scope="col">Nombre de pièces</th>
                <th scope="col">Surface de la maison</th>
                <th scope="col">Surface du terrain</th>
                <th scope="col">N° de la rue</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>  
                <th scope="col">Nom de l'agence</th>  
                <th scope="col">Disponabilité</th>  
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <div class="card">
            <img class="card-img-top" src="../../public/img/<?= $maison->photoMaison ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $maison->nomMaison ?></h5>
                <p class="card-text"><?= $maison->resumeMaison ?></p>
                <div class="row">
                    <a href="./detail.php">
                        <span class="btn btn-outline-secondary">Voir +</span>
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <h6><?= $maison->prixMaison ?> Euros net vendeur</h6>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

<?php
footer();