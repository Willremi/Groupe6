<?php

/**
 * showDataBySerie
 *
 * @param  mixed $titreSerie
 * @return void
 */

function showDataBySerie($titreSerie) {
    $url = file_get_contents('http://api.themoviedb.org/3/search/tv?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1&query='.$titreSerie);

    $tab = json_decode($url);
    $tab_serie = $tab->results;
    dump($tab_serie[0]);

}