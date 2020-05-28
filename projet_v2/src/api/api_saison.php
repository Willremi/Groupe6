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
//    var_dump($tab_saison);

    $str=<<<EOD
   <div class="row">
   <div class="col-12">
   <h1>$tab_nom</h1>
   <hr>
   </div>
   </div>
   <div class="row justify-content-between">
   
   
        
EOD;
        $str;

        echo $str;
    foreach($tab_saison as $saison) {
        $saison_number = (int)$saison_number;
        $nbreSaison = $saison->season_number;
        if($nbreSaison === $saison_number) {
            echo '<div class="offset-md-1 col-md-3">';
            echo '<p><strong>'.$saison->name.'</strong></p>';
            echo '</div>'; // fin col-md-4
            
            echo '<div class="col-md-3">';
            echo '<p><strong>Nombre d\'épisodes :</strong> '.$saison->episode_count.'</p>';
            echo '</div>';

            $date = $saison->air_date;
            $date_explode = explode('-', $date);
            $date_reverse = array_reverse($date_explode);
            $dateFr = implode('-', $date_reverse);

            echo '<div class="col-md-3">';
            echo '<p><strong>Date de diffusion :</strong> '.$dateFr.'</p>';
            echo '</div>';
            
        }
    }
    
   echo '</div>'; // fin row justify-content-around
   echo '<hr>';


}

