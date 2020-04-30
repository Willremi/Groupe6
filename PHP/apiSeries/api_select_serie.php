<?php
function showSelectSerie($arg) {
    $url = file_get_contents('https://api.themoviedb.org/3/list/140995?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');

    $tab_select = json_decode($url);

    $tab_serie = $tab_select->items;

    foreach($tab_serie as $key => $serie) {
        echo '<td>'.$serie->name.'</td>';
    }
}