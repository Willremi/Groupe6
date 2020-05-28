<?php
/**
 * showEpisodeBySaison
 *
 * @param  mixed $idSerie
 * @param  mixed $saison_number
 * @return void
 */
function showEpisodeBySaison($idSerie,$saison_number) {
   // API pour récupérer la description de la série
   $urlSerie = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

   $tab_select_serie = json_decode($urlSerie);

   // Nom de la série
   $tab_nom = $tab_select_serie->name;
   
   // Saison de la série
   $tab_saison = $tab_select_serie->seasons;
     
    $saison = array_column($tab_saison, 'season_number');

   
   $str=<<<EOD
   <div class="row">
   <div class="col-12">
   <h1>$tab_nom</h1>
   <hr>
   </div>
   </div>
   <div class="row justify-content-around">
   <div class="col-md-4">
   <p><strong>Nombre d'épisodes : </strong></p>
        
EOD;
        $str;

        echo $str;
       
    
    echo '</div>'; // fin col-md-4
   echo '</div>'; // fin row justify-content-around
}

?>
<!-- <div class="row justify-content-around">
    <div class="col-md-4">
        One of two columns
    </div>
    <div class="col-md-4">
      One of two columns
    </div> 
</div> -->