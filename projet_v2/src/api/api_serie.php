<?php

/**
 * showDataBySerie
 *
 * @param  mixed $titreSerie
 * @return void
 */

function showDataBySerie($idSerie)
{
    // API pour récupérer l'id de la série
    // $url = file_get_contents('http://api.themoviedb.org/3/search/tv?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1&query='.$titreSerie);

    // $tab = json_decode($url);
    // $tab_serie = $tab->results;
    
    // $idSerie = $tab_serie[0]->id;
    // dump($idSerie);

    // API pour récupérer la description de la série
    $urlSerie = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

    $tab_select_serie = json_decode($urlSerie);

    // Nom de la série
    $tab_nom = $tab_select_serie->name;
    echo '<h1>'.$tab_nom.'</h1>';
    
    $str = <<<EOD
<hr>
</div>
    <div class="offset-md-2 col-sm-3">
            <strong>Genres :</strong>
            <ul>
EOD;

    echo $str;
    // Genres
    $tab_genres = $tab_select_serie->genres;
    // dump($tab_genres);
    
    foreach ($tab_genres as $key => $genres) {
        $name = $genres->name;
        
        $str = <<<EOD
            
            <li>$name</li>
            
EOD;
        echo $str;
    }
    echo '</ul>';

    $str = <<<EOD
    </div>
    <div class="col-sm-3">
    <strong>Réalisateurs :</strong>
    <ul>
EOD;
    echo $str;
    // Réalisateurs
    $tab_Prod = $tab_select_serie->created_by;
    // dump($tab_Prod);
    if ($tab_Prod === []) {
        // dump('rien');
        $str = <<<EOD
        
            <li>Non renseigné</li>
        
EOD;
        echo $str;
    } else {
        // $tab_Prod['name'];
        
        foreach ($tab_Prod as $producteur) {
            // dump($producteur->name);
            $str = <<<EOD
            <li>$producteur->name</li>
            
EOD;
            echo $str;
        }
        // echo '</ul>';
    }
    echo '</ul>';
    echo '</div>';
    $str = <<<EOD
    <div class="col-sm-3">
            <strong>Années de diffusion :</strong>
            <ul>
          
EOD;
    echo $str;
    // Année de production
    $date_debut = $tab_select_serie->first_air_date;
    $date_fin = $tab_select_serie->last_air_date;
    $date_debut_explode = explode('-', $date_debut);
    $date_fin_explode = explode('-', $date_fin);
    $dateDebut = $date_debut_explode[0];
    $dateFin = $date_fin_explode[0];
    // dump($dateDebut);
    // dump($dateFin);
    $str = <<<EOD
            <li>$dateDebut - $dateFin</li>
        </ul>
        </div>
    </div> <!-- fin row -->
    <hr>
    <div class = "row">
        <div class="col-sm-8">
                <p>$tab_select_serie->overview</p>
                <div id="imageSerie">
EOD;
    echo $str;
                if($tab_select_serie->backdrop_path) {
                    echo '<img class="rounded "src="https://image.tmdb.org/t/p/w780/'.$tab_select_serie->backdrop_path.'" alt="photo de série">';
                } else {
                    echo '<img class="rounded "src="../../public/img/LogoTV800.png" alt="photo de série">';
                }
                $str=<<<EOD
                </div>
            <hr id="ligne">
        </div>
        <div class="col-sm-4" id="distribution">
        <h3>Acteurs principaux</h3>
        <div class="list">
            <ul>

    
    

EOD;
    echo $str;
    // Api pour récupérer les acteurs
    $urlCred = file_get_contents("https://api.themoviedb.org/3/tv/".$idSerie."/credits?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1");

    $tab_cred = json_decode($urlCred);
    $tab_cred_acteurs = $tab_cred->cast;

    // Limiter à 5 acteurs principaux
    $tabLimitCred = array_slice($tab_cred_acteurs, 0, 5); 
  
    
    foreach($tabLimitCred as $key => $cast) {
        $personnage = $cast->character;
        $acteur = $cast->name;
        echo '<li>'.$personnage.' : '.$acteur.'</li>';
    }

    echo '</ul></div>';
    $str = <<<EOD
    <h3>Lieux d'origine</h3>
    <div class='list'>
    <ul>
EOD;

    echo $str;

    $tab_pays = $tab_select_serie->origin_country;
    $tabPaysLimit = array_splice($tab_pays, 0, 2);
    foreach($tabPaysLimit as $pays) {
        $urlPays = file_get_contents('https://restcountries.eu/rest/v2/alpha/'.$pays.'?fields=translations');

        $tab_pays_select = json_decode($urlPays);
        $tab_pays_trad = $tab_pays_select->translations;

        foreach ($tab_pays_trad as $key => $pays_trad_fr) {
            if($key === 'fr') {
                echo '<li>'.$pays_trad_fr.'</li>';
            }
        }
    }
    echo '</ul></div>';

    $str = <<<EOD
    <h3>Nombre de saisons</h3>
    <p>$tab_select_serie->number_of_seasons saisons</p>
    </div>
    <div class="col-sm-12 col-lg-12">
    <hr>
    <h3>Achat de vidéos</h3>
    <table class="table-respo">
        <thead>
            <tr>
                <th scope="col">Saisons</th>
                <th scope="col">Nombres d'épisodes</th>
                <th scope="col">Date de diffusion</th>
            </tr>
        </thead>
        <tbody>
        
EOD;

echo $str;
    
    $tab_saison = $tab_select_serie->seasons;
    foreach($tab_saison as $saison) {
        echo '<tr><td>'.$saison->name.'</td>';
        echo '<td>'.$saison->episode_count.'</td>';

        $date = $saison->air_date;
        $date_explode = explode('-', $date);
        $date_reverse = array_reverse($date_explode);
        $dateFr = implode('-', $date_reverse);
        echo '<td>'.$dateFr.'</td>';
    }
    // foreach($tab_saison as $nbEpisode) {
    //     echo '<td>'.$nbEpisode->episode_count.'</td>'; 
    // }
    

$str = <<<EOD

    </tr>
    </tbody>
    </table>
    </div>
EOD;

echo $str;
}

