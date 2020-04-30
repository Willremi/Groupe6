<?php
function showGenreSerie() {
    $url = file_get_contents('https://api.themoviedb.org/3/genre/tv/list?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');

    $tab_genre = json_decode($url);

    $tab_genre = $tab_genre->genres;

    foreach ($tab_genre as $key => $genre) {
        $idGenre = $genre->id;
        $nomGenre = $genre->name;

        echo '<option>'.$nomGenre.'</option>';
    }
}