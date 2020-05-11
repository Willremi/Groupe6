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
            <!-- <hr> -->
          </div>
          <!-- <div class="offset-md-2 col-sm-3">
            <strong>Genres :</strong>
            <p>Policier</p>
          </div> -->
          <!-- <div class="col-sm-3">
            <strong>Réalisateurs :</strong>
            <p>Quinn Martin</p>
          </div> -->
          <!-- <div class="col-sm-3">
            <strong>Années de diffusion :</strong>
            <p>1959 - 1963</p>
          </div> -->
          
        </div> <!-- fin row -->
        <hr>
        
      </div> <!-- fin container -->
