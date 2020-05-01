<?php
function showSelectSerie() {
    $url = file_get_contents('https://api.themoviedb.org/3/list/141005?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');

    $tab_select = json_decode($url);

    $tab_serie = $tab_select->items;

    $urlGenre = file_get_contents('json/genreTv.json');
    $tab_genre = json_decode($urlGenre);

    $tab_genre = $tab_genre->genres;

    // var_dump($tab_genre[0]->id);

    

    
    foreach($tab_serie as $key => $serie) {
        $genreSerie = $serie->genre_ids[0];
        echo '<tr>';
        echo '<td>'.$serie->name.'</td>';
        // echo '<td>'.$serie->genre_ids[0].'</td>';
        foreach ($tab_genre as $key => $genre) {
            $idGenre = $genre->id;
            $nomGenre = $genre->name;
            if($genreSerie === $idGenre) {
                echo '<td>'.$nomGenre.'</td>';
            } elseif ($genreSerie === null) {
                echo '<td>'.null.'</td>';
            }
            
        }

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

