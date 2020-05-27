<?php
function showPopAct() {
    $url = file_get_contents('https://api.themoviedb.org/3/person/popular?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1
    ');

    $tabPop = json_decode($url);
    $tab_pop_list = $tabPop->results;

    echo '<br><div class="row">';

    foreach($tab_pop_list as $pop) {
        $metier = $pop->known_for_department;
        $photo = $pop->profile_path;
        $idActeur = $pop->id;

        if($metier === 'Acting') {
            if($photo) {
                echo '<div class="offset-md-1 col-md-2">';
                echo '<a href="bio?id='.$idActeur.'" target="_blank"><img src="https://image.tmdb.org/t/p/w154'.$photo.'" id="photoActeur" class="rounded">';
                echo '<p></p></a>';
                echo '</div>';
            } 
            
        }
    }

    echo '</div>';
}