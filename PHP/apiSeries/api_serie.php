<?php

/**
 * showDataBySerieTitle
 *
 * @param  mixed $nomSerie
 * @return void
 */

function showDataBySerieTitle($titreSerie) {
    $url = file_get_contents('https://api.themoviedb.org/3/search/tv?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&query='.$titreSerie);

    $tab = json_decode($url);
    $tab_serie = $tab->results;
    // var_dump($tab_serie[0]);

    $serie = $tab_serie[0];
    echo '<p>ID : '.$serie->id.'</p>';
    echo '<p>Titre : '.$serie->name.'</p>';
    echo '<p>Résumé : '.$serie->overview.'</p>';
    echo '<p>Date de production : '.$serie->first_air_date.'</p>';

 }