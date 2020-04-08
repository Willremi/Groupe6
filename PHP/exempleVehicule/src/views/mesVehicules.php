<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

$db = connect();
// var_dump($db);

head();

// $vehiculeMarque = array(
//     "Audi" => "A1",
//     "Audi" => "A4",
//     "Audi" => "A6",
//     "BMW" => "Serie 4",
//     "BMW" => "Serie 7",
//     "BMW" => "Serie X6",
//     "PEUGEOT" => "208",
//     "PEUGEOT" => "5008",
//     "Ford" => "Fiesta",
//     "PEUGEOT" => "S-Max",
// );
if(isset($_POST["marq"]) && isset($_POST["mod"])) {
    $inputMarq = htmlspecialchars(trim($_POST["marq"]));
    $inputMod = htmlspecialchars(trim($_POST["mod"]));

    $sqlInsertMarq = "INSERT INTO marque(nomMarque) VALUES (:inputMarq)";

    $reqMarq = $db->prepare($sqlInsertMarq);
    $reqMarq->bindParam(":inputMarq", $inputMarq, PDO::PARAM_STR);
    $reqMarq->execute();
    $idMarq = $db->lastInsertId();

    $sqlInsertMod = "INSERT INTO modele(nomModele) VALUES (:inputMod)";

    $reqMod = $db->prepare($sqlInsertMod);
    $reqMod->bindParam(":inputMod", $inputMod, PDO::PARAM_STR);
    $reqMod->execute();
    $idMode = $db->lastInsertId();

    $sqlInsertVehicule = "INSERT INTO vehicule(modele_idModele, marque_idMarque) VALUES (:idMode, :idMarq)";

    $reqVehicule = $db->prepare($sqlInsertVehicule);
    $reqVehicule->bindParam(":idMode", $idMode);
    $reqVehicule->bindParam(":idMarq", $idMarq);
    $reqVehicule->execute();
}

$marque = array();
$modele = array();

$sqlSelect = "SELECT idVehicule, nomMarque, nomModele FROM vehicule
INNER JOIN marque ON marque.idMarque = vehicule.marque_idMarque 
INNER JOIN modele ON modele.idModele = vehicule.modele_idModele";


?>

    <h1>Liste de mes véhicules</h1>
    <hr>
    <table class="table table-hover mt-5 mb-5">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Modèle</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $reqSelect = $db->prepare($sqlSelect);
            $reqSelect->execute();
            
            while($data = $reqSelect->fetch()) {
            ?>
        <tr>
            <td><?= $data['idVehicule']; ?></td>
            <td><?= $data['nomMarque']; ?></td>
            <td><?= $data['nomModele']; ?></td>
        <?php } ?>
        </tr>
        
        </tbody>
    </table>
    <div>
        <a href="../../index.php">
            <button type="button" class="btn btn-outline-dark">
                Accueil
            </button>
        </a>
    </div>
</div>

<?php
footer();