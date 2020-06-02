<?php
/**
 * showEpisode
 *
 * @param  mixed $idSerie
 * @param  mixed $saison_number
 * @param  mixed $episode_number
 * @return void
 */
function showEpisode($idSerie,$saison_number,$episode_number) {
    $idSerie = (int)$idSerie;
    $saison_number = (int)$saison_number;
    $episode_number = (int)$episode_number;

    // API pour récupérer la description de la série
   $urlSerie = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

   $tab_select_serie = json_decode($urlSerie);

   // Nom de la série
   $tab_nom = $tab_select_serie->name;

   $str=<<<EOD
   <div class="row">
   <div class="col-12">
   <h1><a href="serie?id=$idSerie">$tab_nom</a></h1>
   <hr>
   </div>
   </div>
EOD;
    echo $str;

}