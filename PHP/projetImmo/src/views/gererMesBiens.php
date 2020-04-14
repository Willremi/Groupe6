<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

$sqlSelect = "SELECT * FROM maison INNER JOIN agence ON agence.idAgence = maison.agence_idAgence INNER JOIN type ON type.idType = maison.type_idType ORDER BY idMaison";
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
            <?php
            foreach ($listeMaison as $maison) {
                ?>
            <tr>
                <th><?= $maison->idMaison ?></th>
                <th><?= $maison->nomMaison ?></th>
                <th><?= $maison->prixMaison ?>€</th>
                <th><?= $maison->nbPiece ?></th>
                <th><?= $maison->surfMaison ?> m²</th>
                <th><?= $maison->surfArea ?> m²</th>
                <th><?= $maison->numRue ?></th>
                <th><?= $maison->nomRue ?></th>
                <th><?= $maison->cpVille ?></th>
                <th><?= $maison->nomVille ?></th>
                <th><?= $maison->nomAgence ?></th>
                <th><?= $maison->nomType ?></th>
                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>

        
       
    

<?php
footer();