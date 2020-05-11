<?php

/**
 * showDataBySerie
 *
 * @param  mixed $titreSerie
 * @return void
 */

function showDataBySerie($titreSerie) {
    $url = file_get_contents('http://api.themoviedb.org/3/search/tv?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1&query='.$titreSerie);

    $tab = json_decode($url);
    $tab_serie = $tab->results;
    dump($tab_serie[0]);
    
    $idSerie = $tab_serie[0]->id;
    // dump($idSerie);

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
    // Réalisateurs
    $tab_Prod = $tab_select_serie->created_by;
    // dump($tab_Prod);
    if($tab_Prod === []) {
        // dump('rien');
        $str = <<<EOD
        <div class="col-sm-3">
            <strong>Réalisateurs :</strong>
            <p>Quinn Martin</p>
        </div>
EOD;
        // echo $str;
    } else {
        // $tab_Prod['name'];
        $str = <<<EOD
        <div class="col-sm-3">
            <strong>Réalisateurs :</strong>
            <p>Quinn Martin</p>
        </div>
EOD;
        // echo $str;
        foreach($tab_Prod as $producteur) {
            // dump($producteur->name);
            
        }
    }
    
}

