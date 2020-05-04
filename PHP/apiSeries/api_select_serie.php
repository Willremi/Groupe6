<?php
$list50 = '140995';
$list60 = '140997';
$list70 = '140999';
$list80 = '141000';
$list90 = '141003';
$list2000 = '141005';

function showSelectSerie($idList) {
    
    // Liste des séries des années 
    $url = file_get_contents('https://api.themoviedb.org/3/list/'.$idList.'?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');
    $tab_select = json_decode($url);
    $tab_serie = $tab_select->items;

    // Listes des genres TV
    $urlGenre = file_get_contents('https://api.themoviedb.org/3/genre/tv/list?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');
    $tab_genres = json_decode($urlGenre);
    $tab_genre = $tab_genres->genres;

    // Listes des réalisateurs et acteurs de la série
    // $urlCredit = file_get_contents('https://api.themoviedb.org/3/tv/'.$idTV.'/credits?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');
    // $tab_credits = json_decode($urlCredit);
    // $tab_credit = $tab_credits->cast;
    // $tab_credit = array_splice($tab_credit, 0, 2);

    // var_dump($tab_genre[0]->id);

    foreach($tab_serie as $key => $serie) {
        $genreSerie = $serie->genre_ids[0];
        $idSérie = $serie->id;
        // var_dump($idSérie);
        echo '<tr>';
        echo '<td>'.$serie->name.'</td>';
        // echo '<td>'.$serie->genre_ids[0].'</td>';
        foreach ($tab_genre as $key => $genre) {
            $idGenre = $genre->id;
            $nomGenre = $genre->name;
            if($genreSerie === $idGenre) {
                echo '<td>'.$nomGenre.'</td>';
            } 
            
        }

        $idTv = $serie->id;
        // Listes des réalisateurs et acteurs de la série
        $urlCredit = file_get_contents('https://api.themoviedb.org/3/tv/'.$idTv.'/credits?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');
        $tab_credits = json_decode($urlCredit);
        $tab_credit = $tab_credits->cast;
        $tab_credit_real = $tab_credits->crew;

        // var_dump($tab_credit);
        $tab_credit = array_splice($tab_credit, 0, 1);
        $tab_credit_real = array_splice($tab_credit_real, 0, 1);
        foreach ($tab_credit as $key => $cast) {
            $acteur = $cast->name;
            
            echo '<td>'.$acteur.'</td>';
            
        }

        foreach($tab_credit_real as $key => $crew) {
            $real = $crew->name;
            echo '<td>'.$real.'</td>';
        }

        // echo '<td>'.$serie->name.'</td>';
        $dateDebut = $serie->first_air_date;
        $dateExplode = explode("-", $dateDebut);
        echo '<td>'.$dateExplode[0].'</td>';
        $codePays = $serie->origin_country[0];

        $urlPays = file_get_contents('https://restcountries.eu/rest/v2/alpha/'.$codePays.'?fields=translations');
        $tab_pays = json_decode($urlPays);
        $tab_pays_trad = $tab_pays->translations;
      
        
        foreach ($tab_pays_trad as $key => $pays) {
            
            // var_dump($key.' => '.$pays);
            if($key === 'fr') {
                echo '<td>'.$pays.'</td>';
            }
        }
        echo '<tr>';
    }
    
}

