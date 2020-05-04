<?php

/**
 * showDataByPaysName
 *
 * @param  mixed $nomPays
 * @return void
 */

function showDataByPaysName($nomPays) {
    $url = file_get_contents("https://restcountries.eu/rest/v2/name/".$nomPays);

    $tab_country = json_decode($url);
    // var_dump($tab_country[0]->translations->fr);

    
    foreach($tab_country as $key => $country) {
        $trad = $country->translations;
        echo $trad->fr.'<br>';
        echo $country->alpha2Code.'<br>';
    }
}


    