<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

session_start();

    if(isset($_SESSION['login'])) {
        $pseudo = $_SESSION['login'];
    } else {
        
        $pseudo = '';
    }



head();

$db = connect();

$sqlAgences = "SELECT * FROM agence";
$reqAgences = $db->prepare($sqlAgences);
$reqAgences->execute();


?>

<div class="row mt-3">
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
    <!-- <div class="col-6">
        <a href="ajoutAgence.php">
            <button type="button" class="btn btn-outline-info">Ajouter une agence</button>
        </a>
    </div> -->
</div>
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom d'agence</th>
            <th scope="col">Téléphone de l'agence</th>
            <th scope="col">Mail de l'agence</th>
            <th scope="col">N° de la rue</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Ville</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($agence = $reqAgences->fetchObject()) {
        ?>
        <tr>
            <th><?= $agence->idAgence ?></th>
            <th><?= $agence->nomAgence ?></th>
            <th><?= $agence->telAgence ?></th>
            <th><?= $agence->emailAgence ?></th>
            <th><?= $agence->numRue ?></th>
            <th><?= $agence->adressAgence ?></th>
            <th><?= $agence->cpAgence ?></th>
            <th><?= $agence->villeAgence ?></th>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
footer();