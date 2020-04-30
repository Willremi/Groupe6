<?php
function showSelectSerie() {
    $url = file_get_contents('json/list50.json');

    $tab_select = json_decode($url);

    $tab_serie = $tab_select->items;

    $urlGenre = file_get_contents('json/genreTv.json');
    $tab_genre = json_decode($urlGenre);

    $tab_genre = $tab_genre->genres;

    // var_dump($tab_genre[0]->id);

    foreach ($tab_genre as $key => $genre) {
        $idGenre = $genre->id;
        $nomGenre = $genre->name;
    }

    
    foreach($tab_serie as $key => $serie) {
        echo '<tr>';
        echo '<td>'.$serie->name.'</td>';
        echo '<td>'.$serie->genre_ids[0].'</td>';

        echo '<td>'.$serie->name.'</td>';
        echo '<td>'.$serie->name.'</td>';
        // echo '<td>'.$serie->first_air_date.'</td>';
        $dateDebut = $serie->first_air_date;
        $dateExplode = explode("-", $dateDebut);
        echo '<td>'.$dateExplode[0].'</td>';

        echo '<td>'.$serie->origin_country[0].'</td>';
        echo '<tr>';
    }
    
}

