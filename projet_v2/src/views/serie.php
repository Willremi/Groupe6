<?php 
require 'src/api/api_serie.php';
// $nomSerie = $_GET['name'];
// $nomSerieExplode = explode(' ', $nomSerie);
// $titreSerie = implode('-', $nomSerieExplode);
$idSerie = $_GET['id'];

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
              
      <?php 
             if($idSerie !== null) {
              // showDataBySerie($titreSerie);
              showDataBySerie($idSerie);
            }
             
      ?> 
</div> <!-- fin container -->
