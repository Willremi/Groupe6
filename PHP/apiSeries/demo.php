<?php

$url = file_get_contents('json/list50.json');

$tab_select = json_decode($url);

$tab_serie = $tab_select->items;



foreach ($tab_serie as $key => $serie) {
    $genreSerie = $serie->genre_ids[0];
    echo $genreSerie.'<br>';

}
echo '<hr>';

$urlGenre = file_get_contents('json/genreTv.json');
    
$tab_genre = json_decode($urlGenre);

$tab_genre = $tab_genre->genres;

foreach ($tab_genre as $key => $genre) {
    $idGenre = $genre->id;
    $nomGenre = $genre->name;
    echo $idGenre.' = '.$nomGenre.'<br>';
   
}
