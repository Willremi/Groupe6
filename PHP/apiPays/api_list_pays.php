<?php
/**
 * showDataByPaysList
 *
 * @param  mixed $nomContinent
 * @return void
 */

function showDataByPaysList($nomContinent) {
    $urlList = file_get_contents("https://restcountries.eu/rest/v2/region/".$nomContinent."?fields=translations");

    $tab_list = json_decode($urlList);
    // var_dump($tab_list);
    foreach($tab_list as $key => $list) {
        $trad = $list->translations;
        echo '<p>'.$trad->fr.'</p>';
    }
}