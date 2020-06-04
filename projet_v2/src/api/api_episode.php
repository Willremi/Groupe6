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
                <a class="page-link" href="?<?= $idSerie ?>/S<?= $saison_number ?>/E1" id="episode">1ère épisode</a>
            </li>
            <li class="page-item <?= ($currentPage === 1) ? 'd-none' : '' ?>">
                <a class="page-link" href="?<?= $idSerie ?>/S<?= $saison_number ?>/E<?= $currentPage - 1 ?>" id="episode">Episode précédent</a>
            </li>
	</ul>
	</nav>
</div>

<div class="col-md-3">
    <p><strong>S<?= $tab_episode->season_number ?>E<?= $tab_episode->episode_number ?> : <?= $tab_episode->name ?></strong></p>
</div>
<!-- <div class="col-md-3">
    <p><strong>Date de diffusion : </strong><?= $dateFr ?></p>
</div> -->
<div class="col-md-4">
<nav aria-label="Page navigation example">
    <ul class="pagination">  
        <li class="page-item <?= ($currentPage == $pages) ? 'd-none' : '' ?>">
        <a class="page-link" href="?<?= $idSerie ?>/S<?= $saison_number ?>/E<?= $currentPage + 1 ?>" id="episode">Episode suivant</a>
        </li>
        <li class="page-item <?= ($currentPage == $pages) ? 'd-none' : '' ?>">
        <a class="page-link" href="?<?= $idSerie ?>/S<?= $saison_number ?>/E<?= $pages ?>" id="episode">Dernière épisode</a>
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
        // if($tab_episode->still_path) {
        //     echo '<img src="https://image.tmdb.org/t/p/w300'.$tab_episode->still_path.'" class="rounded">';
        // } else {
        //     echo '<img class="rounded "src="../../public/img/mireTV.jpg" alt="photo de série">';
        // }
        $str=<<<EOD
        <hr id="ligne">
        </div>
        <div class="offset-md-1 col-md-4" id="distribution">
            <h3>Equipe technique</h3>
            <ul>
EOD;
        echo $str;
        $tab_crew = $tab_episode->crew;
        
        if($tab_crew) {
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
        } else {
            echo '<li>Aucune information disponible</li>';
        }
        
        $str=<<<EOD
        </ul>
        <h3>Date de diffusion</h3>
        <p>$dateFr</p>
        </div>
        
EOD;
        echo $str;
    } else {
        $str=<<<EOD
        <div class="offset-md-1 col-md-6">
            <h2>Résumé</h2>
            <p>Aucune information disponible</p>
            <hr id="ligne">
        </div>
        <div class="offset-md-1 col-md-4" id="distribution">
            <h3>Equipe technique</h3>
                <ul>
                    <li>Aucune information disponible</li>
                </ul>
        </div> 
EOD;    
        echo $str;
    }
    
?>
    </div> <!--fin row -->
    
<?php
    $str=<<<EOD
    <div class="row">
        <div class="col-md-12">
            <h3>Acteurs principaux</h3>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center" id="galerieActeur">
EOD;
    $tab_acteur = $tab_episode->credits;
    $tab_acteur_principaux = $tab_acteur->cast;
    if($tab_acteur_principaux) {
        echo $str;
    }
    // var_dump($tab_acteur_principaux);
    foreach($tab_acteur_principaux as $acteurPrin) {
        $idActeurPrin = $acteurPrin->id;
        $nomActeurPrin = $acteurPrin->name;
        $roleActeurPrin = $acteurPrin->character;
        $photoActeurPrin = $acteurPrin->profile_path;
        echo '<div class="ml-3 col-md-3" id="galerieActeur">';
        // echo '<a href="bio?id='.$idActeurPrin.'" target="_blank">';
        if($photoActeurPrin) {
            echo '<a href="bio?id='.$idActeurPrin.'" target="_blank"><img src="https://image.tmdb.org/t/p/w154'.$photoActeurPrin.'" class="rounded">';
        } else {
            echo '<a href="bio?id='.$idActeurPrin.'" target="_blank"><img src="../../public/img/LogoTV800.png" id="imgLogo" class="rounded">';
        }
        echo '<p><strong>'.$nomActeurPrin.'</a></strong><br>'.$roleActeurPrin.'</p>';
        
        echo '</div>';
    }
    
    echo '</div>'; // fin row
    $str=<<<EOD
    <div class="row">
        <div class="col-md-12">
            <h3>Invités vedettes</h3>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center" id="galerieActeur">
EOD;
    $tab_acteur_special=$tab_acteur->guest_stars;
    if($tab_acteur_special) {
        echo $str;
    }
    foreach($tab_acteur_special as $invite) {
        $idActeurInvit = $invite->id;
        $nomActeurInvit = $invite->name;
        $roleActeurInvit = $invite->character;
        $photoActeurInvit = $invite->profile_path;
        echo '<div class="ml-3 col-md-2" id="galerieActeur">';
        if($photoActeurInvit) {
            echo '<a href="bio?id='.$idActeurInvit.'" target="_blank"><img src="https://image.tmdb.org/t/p/w154'.$photoActeurInvit.'" class="rounded">';
        } else {
            echo '<a href="bio?id='.$idActeurInvit.'" target="_blank"><img src="../../public/img/LogoTV800.png" id="imgLogo" class="rounded">';
        }
        echo '<p><strong>'.$nomActeurInvit.'</a></strong><br>'.$roleActeurInvit.'</p>';
        echo '</div>';
    }
    echo '</div>';
}

