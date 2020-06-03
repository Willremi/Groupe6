<?php
/**
 * showEpisode
 *
 * @param  mixed $idSerie
 * @param  mixed $saison_number
 * @param  mixed $episode_number
 * @return void
 */
function showEpisode($idSerie, $saison_number, $episode_number)
{
    $idSerie = (int)$idSerie;
    $saison_number = (int)$saison_number;
    $episode_number = (int)$episode_number;

    // API pour récupérer la description de la série
    $urlSerie = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

    $tab_select_serie = json_decode($urlSerie);

    // Nom de la série
    $tab_nom = $tab_select_serie->name;

    // Saison
    $tab_saison = $tab_select_serie->seasons;

    $str=<<<EOD
   <div class="row">
   <div class="col-12">
   <h1><a href="serie?id=$idSerie">$tab_nom</a></h1>
   <hr>
   </div>
   </div>
   <div class="row">
EOD;
    echo $str;

    // API pour récupérer la description de l'épisode
    $urlEpisode = file_get_contents('https://api.themoviedb.org/3/tv/'.$idSerie.'/season/'.$saison_number.'/episode/'.$episode_number.'?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&append_to_response=credits');

    $tab_episode = json_decode($urlEpisode);

    foreach ($tab_saison as $saison) {
        $saisonNum = $saison->season_number;
        if ($saisonNum === $saison_number) {
            $nbEpisode = (int)$saison->episode_count;
        }
    }
    if (isset($episode_number) && !empty($episode_number)) {
        $currentPage = (int) strip_tags($episode_number);
    } else {
        $currentPage = 1;
    }

    $pages = $nbEpisode;
    // var_dump($currentPage);
    $date = $tab_episode->air_date;
    $date_explode = explode('-', $date);
    $date_reverse = array_reverse($date_explode);
    $dateFr = implode('-', $date_reverse);
    // var_dump($dateFr);
?>
<div class="offset-md-1 col-md-4">
<nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?= ($currentPage === 1) ? 'd-none' : '' ?>">
                <a class="page-link" href="?<?= $idSerie ?>/S<?= $saison_number ?>/E<?= $currentPage - 1 ?>" id="episode">Episode précédent</a>
            </li>
	</ul>
	</nav>
</div>

<div class="col-md-4">
    <p><strong>S<?= $tab_episode->season_number ?>E<?= $tab_episode->episode_number ?> : <?= $tab_episode->name ?></strong></p>
</div>
<!-- <div class="col-md-3">
    <p><strong>Date de diffusion : </strong><?= $dateFr ?></p>
</div> -->
<div class="col-md-2">
<nav aria-label="Page navigation example">
    <ul class="pagination">  
        <li class="page-item <?= ($currentPage == $pages) ? 'd-none' : '' ?>">
        <a class="page-link" href="?<?= $idSerie ?>/S<?= $saison_number ?>/E<?= $currentPage + 1 ?>" id="episode">Episode suivant</a>
        </li>
    </ul>
</nav>

</div>
 </div> <!-- fin row -->
<!-- <hr> -->
<div class="row">
    
<?php

    echo '</div>';
    echo '<hr>';
    echo '<div class="row">';
    if($tab_episode->overview) {

        $str=<<<EOD
        <div class="offset-md-1 col-md-6">
            <h2>Résumé</h2>
            <p>$tab_episode->overview</p>
            
EOD;    
        echo $str;
        if($tab_episode->still_path) {
            echo '<img src="https://image.tmdb.org/t/p/w300'.$tab_episode->still_path.'" class="rounded">';
        } else {
            echo '<img class="rounded "src="../../public/img/mireTV.jpg" alt="photo de série">';
        }
        $str=<<<EOD
        <hr id="ligne">
        </div>
        <div class="offset-md-1 col-md-4">
            <h2>Equipe technique</h2>
            <ul>
EOD;
        echo $str;
        $tab_crew = $tab_episode->crew;
        
        foreach ($tab_crew as $real) {
            $metierReal = $real->job;
            if($metierReal === 'Director') {
                $metierReal = 'Réalisateur';
                echo '<li><a href="bio?id='.$real->id.'" target="_blank">'.$real->name.'</a>('.$metierReal.')'.'</li>';
            }
            if($metierReal === 'Writer') {
                $metierReal = 'Auteur';
                echo '<li><a href="bio?id='.$real->id.'" target="_blank">'.$real->name.'</a>('.$metierReal.')'.'</li>';
            }
        }
        
        $str=<<<EOD
        </ul>
        <h2>Date de diffusion</h2>
        <ul>
        <li>$dateFr</li>
        </ul>
EOD;
        echo $str;
        echo '</div>';
    }
    
    // var_dump($tab_episode->overview);
    echo '</div>'; // fin row
}

