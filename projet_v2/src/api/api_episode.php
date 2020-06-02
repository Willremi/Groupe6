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
    $urlEpisode = file_get_contents('https://api.themoviedb.org/3/tv/4414/season/'.$saison_number.'/episode/'.$episode_number.'?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&append_to_response=credits');

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
$tab_real = $tab_episode->crew;
 foreach ($tab_real as $real) {
     $nomReal = $real->name;
     $metierReal = $real->job;
    //  var_dump($metierReal);
     if($nomReal && $metierReal) {
        if($metierReal === "Director") {
            echo '<div class="offset-md-2 col-md-3"><strong>Réalisé(e) par </strong><a href="bio?id='.$real->id.'" target="_blank">'.$nomReal.'</a></div>';
         }
         if ($metierReal === "Writer") {
            echo '<div class="col-md-3"><strong>Ecrit(e) par </strong><a href="bio?id='.$real->id.'" target="_blank">'.$nomReal.'</a></div>';
         }
     }
    }
    echo '<div class="col-md-2"><strong>Diffusé le </strong>'.$dateFr.'</div>';
    echo '</div>';
    echo '<hr>';
}