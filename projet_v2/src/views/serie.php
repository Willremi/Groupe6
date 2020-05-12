<?php 
require 'src/api/api_serie.php';
$nomSerie = $_GET['name'];
$nomSerieExplode = explode(' ', $nomSerie);
$titreSerie = implode('-', $nomSerieExplode);

// dump($titreSerie);



?>

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- <h1>Les incorruptibles</h1> -->
             <?php 
             if($titreSerie !== null) {
              showDataBySerie($titreSerie);
            }
             
             ?> 

        
      </div> <!-- fin container -->
