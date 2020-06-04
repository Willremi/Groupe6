<?php
require 'src/api/api_saison.php';
$serie = array_keys($_GET);
$serie = $serie[0];
// var_dump($serie);
$serieExplode = explode('/', $serie);
// var_dump($serieExplode);

$idSerie = $serieExplode[0];
$saison = $serieExplode[1];
$saison = explode('S', $saison);

$saison_number = (int)$saison[1];
?>
<div class="container-fluid">
  
    <?php 
             if($idSerie !== null && $saison_number !== null) {
              showEpisodeBySaison($idSerie,$saison_number);
            } else {
                echo 'Aucun information disponible';
            }
             
    ?> 
</div> <!-- fin container -->
