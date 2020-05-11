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
    // dump($tab_serie[0]);
    
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
    if($tab_Prod === []) {
        // dump('rien');
        $str = <<<EOD
        
            <li>Non renseigné</li>
        
EOD;
         echo $str;
        
    } else {
        // $tab_Prod['name'];
        
        foreach($tab_Prod as $producteur) {
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
    EOD;
    echo $str;
    echo '</ul>';
    echo '</div>';
}

