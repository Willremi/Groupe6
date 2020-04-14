<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

$sqlSelect = "SELECT * FROM maison LIMIT 3";
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
                # code...
            
        ?>

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