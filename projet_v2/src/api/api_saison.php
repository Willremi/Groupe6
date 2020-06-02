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
   <h1><a href="serie?id=$idSerie">$tab_nom</a></h1>
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
            echo '</div>'; // fin col-md-3
            
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
    $photo = $tab_episode_saison->poster_path;
    echo '<div class="row justify-content-center">';
    echo '<div>';
    if($photo) {
        echo '<img src="https://image.tmdb.org/t/p/w185/'.$photo.'">';

    } else {
        echo '<img src="../../public/img/LogoTV800.png" style="width: 300px;" class="rounded">';
    }
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
    
    <div class="col-sm-12 col-lg-12">
    <h3>Liste d'épisode</h3>
    <br>
EOD;
        echo $str;
        if(isset($saison_number) && !empty($saison_number)){
            $currentPage = (int) strip_tags($saison_number);
        } 
        else{
            $currentPage = 1;
        }

        $pages = (int)$tab_select_serie->number_of_seasons;
        
?>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item <?= ($currentPage == 1) ? 'disabled' : '' ?>">
            <a class="page-link" href="?idSerie=<?= $idSerie ?>&num=<?= $currentPage - 1 ?>">Saison précédente</a>
        </li>
        <li class="page-item"><p class="page-link"><?= $tab_episode_saison->name ?></p></li>
        <li class="page-item <?= ($currentPage == $pages) ? 'disabled' : '' ?>">
            <a class="page-link" href="?idSerie=<?= $idSerie ?>&num=<?= $currentPage + 1 ?>">Saison suivante</a>
        </li>
    </ul>
</nav>

<?php

        $str = <<<EOD
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
        echo '<td><a href="episode?'.$idSerie.'/S'.$saison_number.'/E'.$episode_number.'" target="_blank">'.$episode_number.'</a></td>';
        echo '<td><a href="episode?'.$idSerie.'/S'.$saison_number.'/E'.$episode_number.'" target="_blank">'.$titre_episode.'</a></td>';
        echo '<td><p>'.$resume_episode.'</p></td>';
        
    }
    $str = <<<EOD

    </tr>
    </tbody>
    </table>
   <br>
EOD;

echo $str;
?>
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item <?= ($currentPage == 1) ? 'disabled' : '' ?>">
            <a class="page-link" href="?idSerie=<?= $idSerie ?>&num=<?= $currentPage - 1 ?>">Saison précédente</a>
        </li>
        <li class="page-item"><p class="page-link"><?= $tab_episode_saison->name ?></p></li>
        <li class="page-item <?= ($currentPage == $pages) ? 'disabled' : '' ?>">
            <a class="page-link" href="?idSerie=<?= $idSerie ?>&num=<?= $currentPage + 1 ?>">Saison suivante</a>
        </li>
    </ul>
</nav>
<?php

    echo '</div>'; // fin row
}

