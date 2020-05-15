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

function showListPays($nomContinent) {
    //API pour récupérer la liste des pays par continent
    $url = file_get_contents('https://restcountries.eu/rest/v2/region/'.$nomContinent.'?fields=name;translations;alpha2Code');

    $tab_list_pays = json_decode($url);
    
    foreach($tab_list_pays as $key => $pays) {
        $paysTrad = $pays->translations;
        if($paysTrad->fr) {
            echo $key.'/'.$paysTrad->fr.': '.$pays->alpha2Code.'<br>';

        }
    }
}