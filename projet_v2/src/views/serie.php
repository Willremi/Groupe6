<?php 
require 'src/api/api_serie.php';
// $nomSerie = $_GET['name'];
// $nomSerieExplode = explode(' ', $nomSerie);
// $titreSerie = implode('-', $nomSerieExplode);
$idSerie = $_GET['id'];

?>

<div class="container-fluid">
  
    <?php 
             if($idSerie !== null) {
              // showDataBySerie($titreSerie);
              showDataBySerie($idSerie);
            }
             
      ?>
      <div class="col-sm-12 col-lg-12">
            <h3>Commentaires</h3>
            <?php 
            $login = $_SESSION['login'];
            if(!$login) :
            ?>
            <div class="row justify-content-md-center">
                 
                  <div class="col-sm-2">
                  <a href="inscription">
                        <button class="btn btn-success">Inscrivez-vous</button></a>
                  </div>
                  <div class="col-sm-2">
                  <a href="connexion">
                        <button class="btn btn-primary">Connectez-vous</button></a>
                  </div>

            </div>
            <?php endif ?>
      </div>
</div> <!-- fin container -->
