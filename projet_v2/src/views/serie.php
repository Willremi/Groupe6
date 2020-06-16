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
      </div>
</div> <!-- fin container -->
