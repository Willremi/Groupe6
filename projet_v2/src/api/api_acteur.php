<?php

/**
 * showDetailActeur
 *
 * @param  mixed $acteur
 * @return void
 */

function showDetailActeur ($acteur) {
    // API pour rechercher acteur (ou réalisateur)
    $urlSeachActeur = file_get_contents('https://api.themoviedb.org/3/search/person?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1&query='.$acteur);

    $tab_search_acteur = json_decode($urlSeachActeur);
    $tab_acteur = $tab_search_acteur->results;
    echo '<br><div class="row">';
    // echo '<div>';
    foreach($tab_acteur as $detailActeur) {
        $idActeur = $detailActeur->id;
        
        // var_dump($idActeur);
        //API pour afficher informations de l'acteur(date et lieu de naissance/ date de décès)
        $urlCiActeur = file_get_contents('https://api.themoviedb.org/3/person/'.$idActeur.'?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');

        $tab_ci_acteur = json_decode($urlCiActeur);
        // Nom de l'acteur
        $nomActeur = $tab_ci_acteur->name;

        // Date de naissance
        $dateBirth = $tab_ci_acteur->birthday;
        $dateBirthExplode = explode('-',$dateBirth);
        $dateBirthTab = array_reverse($dateBirthExplode);
        $dateNaissance = implode('/', $dateBirthTab); 
        
        // Lieu de naissance
        $lieuBirth = $tab_ci_acteur->place_of_birth;

        // Date de décès
        $dateDeath = $tab_ci_acteur->deathday;
        $dateDeathExplode = explode('-',$dateDeath);
        $dateDeathTab = array_reverse($dateDeathExplode);
        $dateDeces = implode('/', $dateDeathTab); 

        // Bio 
        $bio = $tab_ci_acteur->biography;

        // Photo de l'acteur
        $photo = $tab_ci_acteur->profile_path;

        if($nomActeur && $dateNaissance && $lieuBirth) {
            
            $str=<<<EOD
            
            <div class="offset-md-1 col-md-2">

EOD;
            echo $str;
            if($photo) {
                echo '<a href="bio?id='.$idActeur.'" target="_blank"><img src="https://image.tmdb.org/t/p/w154'.$photo.'" id="photoActeur" class="rounded">';
                echo '<p>'.$nomActeur.'</p></a>';
            } else {
                echo '<a href="bio?id='.$idActeur.'" target="_blank"><img src="../../public/img/LogoTV800.png" style="width: 92px;" id="photoActeur" class="rounded">';
                echo '<p>'.$nomActeur.'</p></a>';
            }
            
            echo '</div>';
            
           
            
        }
        
    } // fin foreach
    
    echo '</div>'; //fin row
}


