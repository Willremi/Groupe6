<?php
require 'src/api/api_saison.php';

$saison_number = $_GET['num'];
$idSerie = $_GET['idSerie'];
// var_dump($idSerie);

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
              
      <?php 
             if($idSerie !== null && $saison_number !== null) {
              showEpisodeBySaison($idSerie,$saison_number);
            } else {
                echo 'Aucun information disponible';
            }
             
      ?> 
</div> <!-- fin container -->
