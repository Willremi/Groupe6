<?php
// switch($nomContinent) {
//     case 'Amériques':
//     $nomContinent = 'Americas';
//     break; 
//     case 'Asie':
//     $nomContinent = 'Asia';
//     break;
//     case 'Afrique':
//     $nomContinent = 'Africa';
//     break;
//     case 'Océanie': 
//     $nomContinent = 'Oceania';
//     break;
// }

/**
 * showListPays
 *
 * @param  mixed $nomContinent
 * @return void
 */

function showListPays($titreSerie, $annees) {
    //API pour récupérer la liste des pays par continent
    // $url = file_get_contents('https://restcountries.eu/rest/v2/region/'.$nomContinent.'?fields=name;translations;alpha2Code');
    
    // var_dump($annees);
    // $tab_list_pays = json_decode($url);

    if($titreSerie === '') {
        // Recherche sans input text
    } else {
        // API pour recherche par nom de série
    $urlSerie = file_get_contents('https://api.themoviedb.org/3/search/tv?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&query='.$titreSerie);
    
    $tab_list_serie = json_decode($urlSerie);
    $tab_serie = $tab_list_serie->results;
   
    // var_dump($tab_serie);
    
    foreach ($tab_serie as $serie) {
        $paysOrigin = $serie->origin_country[0];
        
        $date = $serie->first_air_date;
        $dateExplode = explode('-', $date);
        $anneeDif = $dateExplode[0];
        
        $resume = $serie->overview;
        // if ($anneeDif < 2011 && $anneeDif !== '') {
        
        $str =<<<EOD
        <h4>Titre : $serie->name</h4>
        <p>Titre d'origine : $serie->original_name</p>
        <!-- <p>Pays d'origine : $paysOrigin</p> -->
        <p>Année de la première diffusion : $anneeDif</p>
        <p>Pays d'origine : $paysOrigin</p>
        <hr>
EOD;
        if($paysOrigin && $anneeDif) {
           
            switch($annees) {
                case('Années 50'):
                    if($anneeDif >= 1950 && $anneeDif < 1960) {
                        echo $str;
                        
                    }
                break;
                case('Années 60'):
                    if($anneeDif >= 1960 && $anneeDif < 1970) {
                        echo $str;
                    }
                break;
                case('Années 70'):
                    if($anneeDif >= 1970 && $anneeDif < 1980) {
                        echo $str;
                    }
                break;
                case('Années 80'):
                    if($anneeDif >= 1980 && $anneeDif < 1990) {
                        echo $str;
                    }
                break;
                case('Années 90'):
                    if($anneeDif >= 1990 && $anneeDif < 2000) {
                        echo $str;
                    }
                break;
                case('Années 2000'):
                    if($anneeDif >= 2000 && $anneeDif < 2010) {
                        echo $str;
                    }
                break;
                default:
                    if($anneeDif < 2010) {
                        echo $str;
                    }
            }
        }
        
        } // fin foreach
        
} // fin else
    
    // foreach($tab_list_pays as $key => $pays) {
    //     $paysTrad = $pays->translations;
    //     if($paysTrad->fr) {
    //         echo $key.'/'.$paysTrad->fr.': '.$pays->alpha2Code.'<br>';
           
    //     }
    // }
}