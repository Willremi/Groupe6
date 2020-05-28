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
   
   $str=<<<EOD
   <h1>$tab_nom</h1>
EOD;
    echo $str;
   
}