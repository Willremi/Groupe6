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
            // echo '<p>Nom de l\'acteur : '.$nomActeur.'</p>';
            // echo '<p>Date de naissance : '.$dateNaissance.'</p>';
            // echo '<p>Lieu de naissance : '.$lieuBirth.'</p>';
            // if($dateDeces !== '') {
            //     echo '<p>Date de décès : '.$dateDeces.'</p>';
            // } 
            // if($bio) {
            //     echo '<p>Bio : '.$bio.'</p>';
            // } else {
            //     $urlCiActeurEnglish = file_get_contents('https://api.themoviedb.org/3/person/'.$idActeur.'?api_key=c595147bf4af143ab2df16843f9487bf&page=1');

            //     $tab_ci_acteurEnglish = json_decode($urlCiActeurEnglish);

            //     $biography = $tab_ci_acteurEnglish->biography;

            //     if($biography) {
            //         echo '<p>Bio (En anglais) : '.$biography.'</p>';
            //     } else {
            //         echo '<p>Bio : Pas d\'information disponible</p>';
            //     }
            // }
            // if($photo) {
            //     echo '<img src="https://image.tmdb.org/t/p/w92'.$photo.'">';
            // } else {
            //     echo '<img src="../../public/img/LogoTV.png" style="width: 92px;">';
            // }
            $str=<<<EOD
            <div class="col-md-2">

EOD;
            echo $str;
            if($photo) {
                echo '<img src="https://image.tmdb.org/t/p/w154'.$photo.'" id="photoActeur">';
            } else {
                echo '<img src="../../public/img/LogoTV800.png" style="width: 92px;" id="photoActeur">';
            }
            $str=<<<EOD
            </div>
            <div class="col-md-10">
EOD;
            echo $str;
            echo '<p>Nom de l\'acteur : '.$nomActeur.'</p>';
            echo '<p>Date de naissance : '.$dateNaissance.'</p>';
            echo '<p>Lieu de naissance : '.$lieuBirth.'</p>';
            if($dateDeces !== '') {
                echo '<p>Date de décès : '.$dateDeces.'</p>';
            } 
            if($bio) {
                echo '<p>Bio : '.$bio.'</p>';
            } else {
                $urlCiActeurEnglish = file_get_contents('https://api.themoviedb.org/3/person/'.$idActeur.'?api_key=c595147bf4af143ab2df16843f9487bf&page=1');

                $tab_ci_acteurEnglish = json_decode($urlCiActeurEnglish);

                $biography = $tab_ci_acteurEnglish->biography;

                if($biography) {
                    echo '<p>Bio (En anglais) : '.$biography.'</p>';
                } else {
                    echo '<p>Bio : Pas d\'information disponible</p>';
                }
            }
            echo '<br><br>';
            echo '</div>';
        }
        
    } // fin foreach
    echo '</div>'; //fin row
}