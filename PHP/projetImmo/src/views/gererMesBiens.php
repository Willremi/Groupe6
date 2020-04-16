<?php
session_start();
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

    if(isset($_SESSION['login'])) {
        $pseudo = $_SESSION['login'];
    } else {
        
        $pseudo = '';
    }

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
<?php 
  if ($_SESSION['login'] === 'willremi') {
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
                
                <th scope="col">N° de la rue</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>  
                <th scope="col">Nom de l'agence</th>  
                <th scope="col">Disponibilité</th>
                <th scope="col">Action</th> 
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
                
                
                <th><?= $maison->numRue ?></th>
                <th><?= $maison->nomRue ?></th>
                <th><?= $maison->cpVille ?></th>
                <th><?= $maison->nomVille ?></th>
                <th><?= $maison->nomAgence ?></th>
                <th><?= $maison->nomType ?></th>
                <th>
                 <a href="description.php?id=<?= $maison->idMaison ?>"><button class="btn btn-primary"><i class="fa fa-bars" aria-hidden="true"></i>Lire</button>
                </a>
                <a href="modifMaison.php?id=<?= $maison->idMaison ?>"><button class="btn btn-warning" type="submit"><i class="fa fa-spinner" aria-hidden="true"></i> Modifier</button></a>
                <a href="suppMaison.php?id=<?= $maison->idMaison; ?>"><button class="btn btn-danger" type="submit"><i class="fa fa-minus-square" aria-hidden="true"></i> Supprimer</button></a>  
                </th>
                </tr>
                <?php
            } ?>
            </tbody>
        </table>

<?php
  } else {
      echo 'Vous n\'êtes pas autorisés';
  }
  
footer();