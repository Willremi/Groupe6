<?php
switch($nomContinent) {
    case 'Amériques':
    $nomContinent = 'Americas';
    break; 
    case 'Asie':
    $nomContinent = 'Asia';
    break;
    case 'Afrique':
    $nomContinent = 'Africa';
    break;
    case 'Océanie': 
    $nomContinent = 'Oceania';
    break;
}

/**
 * showListPays
 *
 * @param  mixed $nomContinent
 * @return void
 */

function showListPays($titreSerie, $nomContinent, $annees) {
    //API pour récupérer la liste des pays par continent
    $url = file_get_contents('https://restcountries.eu/rest/v2/region/'.$nomContinent.'?fields=name;translations;alpha2Code');
    
    // var_dump($annees);
    $tab_list_pays = json_decode($url);

    $urlSerie = file_get_contents('https://api.themoviedb.org/3/search/tv?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&query='.$titreSerie);
    
    $tab_list_serie = json_decode($urlSerie);
    $tab_serie = $tab_list_serie->results;
    // var_dump($tab_serie);
    foreach($tab_serie as $serie) {
        $paysOrigin = $serie->origin_country[0];
        
        $date = $serie->first_air_date;
        $dateExplode = explode('-', $date);
        $anneeDif = $dateExplode[0];
        
        if($anneeDif < 2001 && $anneeDif !== '') {
            $str =<<<EOD
        <h4>Titre : $serie->name</h4>
        <p>Titre d'origine : $serie->original_name</p>
        <p>Pays d'origine : $paysOrigin</p>
        <p>Année de la première diffusion : $anneeDif</p>
        <p>Résumé : $serie->overview</p>
        <hr>

EOD;
echo $str;
        } 
        
        
    }
    // foreach($tab_list_pays as $key => $pays) {
    //     $paysTrad = $pays->translations;
    //     if($paysTrad->fr) {
    //         echo $key.'/'.$paysTrad->fr.': '.$pays->alpha2Code.'<br>';
           
    //     }
    // }
}