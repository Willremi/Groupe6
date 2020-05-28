<?php
/**
 * showEpisodeBySaison
 *
 * @param  mixed $idSerie
 * @param  mixed $saison_number
 * @return void
 */
function showEpisodeBySaison($idSerie,$saison_number) {
    $saison_number = (int)$saison_number;
   // API pour récupérer la description de la série
   $urlSerie = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

   $tab_select_serie = json_decode($urlSerie);

   // Nom de la série
   $tab_nom = $tab_select_serie->name;
   
   // Saison de la série
   $tab_saison = $tab_select_serie->seasons;
//    var_dump($tab_saison);

    $str=<<<EOD
   <div class="row">
   <div class="col-12">
   <h1>$tab_nom</h1>
   <hr>
   </div>
   </div>
   <div class="row justify-content-between">
   
   
        
EOD;
        $str;

        echo $str;
    foreach($tab_saison as $saison) {
        
        $nbreSaison = $saison->season_number;
        if($nbreSaison === $saison_number) {
            echo '<div class="offset-md-1 col-md-3">';
            echo '<p><strong>'.$saison->name.'</strong></p>';
            echo '</div>'; // fin col-md-4
            
            echo '<div class="col-md-3">';
            echo '<p><strong>Nombre d\'épisodes :</strong> '.$saison->episode_count.'</p>';
            echo '</div>';

            $date = $saison->air_date;
            $date_explode = explode('-', $date);
            $date_reverse = array_reverse($date_explode);
            $dateFr = implode('-', $date_reverse);

            echo '<div class="col-md-3">';
            echo '<p><strong>Date de diffusion :</strong> '.$dateFr.'</p>';
            echo '</div>';
            
        }
    }
    
   echo '</div>'; // fin row justify-content-around
   echo '<hr>';

    // API pour diffuser les épisodes par saison
    $urlSaison = file_get_contents('https://api.themoviedb.org/3/tv/'.$idSerie.'/season/'.$saison_number.'?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR');
    $tab_episode_saison = json_decode($urlSaison);
    $tab_list_episode = $tab_episode_saison->episodes;

    echo '<div class="row justify-content-center">';
    echo '<div>';
    echo '<img src="https://image.tmdb.org/t/p/w185/'.$tab_episode_saison->poster_path.'">';
    echo '</div>';
    echo '</div>'; // fin row justify-content-center
    echo '<br>';
    // echo '<div class="row justify-content-center">';
    // echo '<details>';
    // echo '<summary>Episodes</summary>';
    // echo '<ul>';
    // foreach ($tab_list_episode as $listEpisode) {
    //    echo '<li><a href="#'.$listEpisode->episode_number.'">'.$listEpisode->name.'</a></li>'; 
    // }
    // echo '</ul>';
    // echo '</details>';
    // echo '</div>';
    $str = <<<EOD
    <br>
    <div class="col-sm-12 col-lg-12">
    <h3>Liste d'épisode</h3>
    <hr>
    
    <table class="table-respo">
        <thead>
            <tr>
                <th scope="col">Episode</th>
                <th scope="col">Titre</th>
                <th scope="col">Résumé</th>
            </tr>
        </thead>
        <tbody>
        
EOD;

echo $str;

    foreach($tab_list_episode as $episode) {
        $episode_number = $episode->episode_number;
        $titre_episode = $episode->name;
        $resume_episode = $episode->overview;
        echo '<tr>';
        echo '<td>'.$episode_number.'</td>';
        echo '<td>'.$titre_episode.'</td>';
        echo '<td>'.$resume_episode.'</td>';
        
    }
    $str = <<<EOD

    </tr>
    </tbody>
    </table>
   
EOD;

echo $str;
    echo '</div>'; // fin row
}

