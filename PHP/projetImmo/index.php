<?php
require_once 'src/views/elements/head.php';
require_once 'src/views/elements/footer.php';
require 'src/config/config.php';
require 'src/models/connect.php';

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
<div class="row mt-5 d-flex justify-content-center">
        <div class="col-xs-5 col-sm-5 col-md-5  col-lg-4  col-xl-4 ">
            <img class="card-img-top" src="public/img/BernardBlier.jpg" alt="Card image cap">
        </div>

        <div class="col-xs-5 col-sm-5 col-md-5  col-lg-5  col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bienvenue sur IMMO-Blier!!</h5>
                    <p class="card-text">Le site de ventes et locations de biens immobiliers de Bernard Blier!</p>

                        <p>"Chez moi on ne vends pas, on ventile!!"</p>
                    <a href="src/views/contact.php" class="btn btn-outline-secondary">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <h1>Voici une sélection de nos biens immobiliers </h1>
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