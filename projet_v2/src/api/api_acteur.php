<?php

/**
 * showDetailActeur
 *
 * @param  mixed $acteur
 * @return void
 */

function showDetailActeur ($acteur) {
    // API pour rechercher acteur (ou réalisateur)
    $urlSeachActeur = file_get_contents('https://api.themoviedb.org/3/search/person?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1&query='.$acteur);

    $tab_search_acteur = json_decode($urlSeachActeur);
    $tab_acteur = $tab_search_acteur->results;
    
    foreach($tab_acteur as $detailActeur) {
        $idActeur = $detailActeur->id;
        
        $str= <<<EOD
        <p>$idActeur</p>
        
EOD;
        echo $str;
    }
}