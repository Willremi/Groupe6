<?php
require 'src/api/api_episode.php';
$serie = array_keys($_GET);
$serie = $serie[0];
// var_dump($serie);
$serieExplode = explode('/', $serie);
// var_dump($serieExplode);

$idSerie = $serieExplode[0];
$saison = $serieExplode[1];
$saison = explode('S', $saison);
$episode = $serieExplode[2];
$episode = explode('E', $episode);
// var_dump($episode);

// $saison = preg_split('//', $serieExplode[1], -1, PREG_SPLIT_NO_EMPTY);
// $episode = preg_split('//', $serieExplode[2], -1, PREG_SPLIT_NO_EMPTY);

$saison_number = (int)$saison[1];
$episode_number = (int)$episode[1];

// var_dump($saison_number);
?>
<div class="container-fluid">
  
  <?php 
           if($idSerie !== null && $saison_number !== null && $episode_number) {
            showEpisode($idSerie,$saison_number,$episode_number);
          } else {
              echo 'Aucun information disponible';
          }
           
  ?> 
</div> <!-- fin container -->