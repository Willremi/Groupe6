<?php
/**
 * showBio
 *
 * @param  mixed $idActeur
 * @return void
 */
function showBio($idActeur) {
  // Api nom de l'acteur
$urlbio = file_get_contents('https://api.themoviedb.org/3/person/'.$idActeur.'?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');

$tab_bio_acteur = json_decode($urlbio);

// nom de l'acteur
$nomActeur = $tab_bio_acteur->name;

// Date de naissance
$dateBirth = $tab_bio_acteur->birthday;
$dateBirthExplode = explode('-',$dateBirth);
$dateBirthTab = array_reverse($dateBirthExplode);
$dateNaissance = implode('/', $dateBirthTab);

// Lieu de naissance
$lieuBirth = $tab_bio_acteur->place_of_birth;

// Date de décès
$dateDeath = $tab_bio_acteur->deathday;
$dateDeathExplode = explode('-',$dateDeath);
$dateDeathTab = array_reverse($dateDeathExplode);
$dateDeces = implode('/', $dateDeathTab);

// Photo de l'acteur
$photo = $tab_bio_acteur->profile_path;

 // Bio 
 $bio = $tab_bio_acteur->biography;

$str=<<<EOD
  <h1>$nomActeur</h1>
  <hr>
  <div class="row">
  <div class="offset-md-1 col-md-3">
EOD;
echo $str;

if($photo) {
  echo '<img src="https://image.tmdb.org/t/p/w300'.$photo.'" class="rounded">';
} else {
  echo '<img src="../../public/img/LogoTV800.png" style="width: 300px;" class="rounded">';
}
  echo '</div>'; // fin col-md-3
$str = <<<EOD
  <div class="col-md-6">
  <p>Né(e) le $dateNaissance à $lieuBirth</p>
EOD;
echo $str;
if($dateDeces !== '') {
  echo '<p>Mort(e) le '.$dateDeces.'</p>';
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

  echo '</div>'; // fin col-md-6
 echo '</div>'; // Fin row
 echo '<hr>';
 echo '<div class="row">';

// API sur interprétations et réalisations de l'acteur
$urlDist = file_get_contents('https://api.themoviedb.org/3/person/'.$idActeur.'/tv_credits?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');

$tab_dist_acteur = json_decode($urlDist);
$tab_role = $tab_dist_acteur->cast;
$tab_real = $tab_dist_acteur->crew;

// Tri json par date décroissant
uasort($tab_role, function($date1, $date2){
  return strtotime($date2->first_air_date) > strtotime($date1->first_air_date);
});
uasort($tab_real, function($date1, $date2){
  return strtotime($date2->first_air_date) > strtotime($date1->first_air_date);
});

if($tab_real === []) {
  echo '<div class="offset-md-1 col-md-10">';
} else if($tab_real) {
  echo '<div class="col-md-6">';
}

$str= <<<EOD
  <!-- <div class="col-md-6"> -->
  <h3>Interprétations</h3>
  <table class="table-respo">
    <thead>
      <tr>
        <th scope="col">Années</th>
        <th scope="col">Séries</th>
        <th scope="col">Rôle</th>
      </tr>
    </thead>
    <tbody>
EOD;
  echo $str;

 // $tabAnnee = array_column($tab_role, 'first_air_date');
  // arsort($tabAnnee);
  
  foreach($tab_role as $role) {
    echo '<tr>';
    $date = $role->first_air_date;
    $date_explode = explode('-', $date);
    $dateFr = (int)$date_explode[0];
    // var_dump($dateFr);
    
    if($dateFr > 1950) {
    echo '<td>'.$dateFr.'</td>';
    echo '<td><a href="serie?id='.$role->id.'">'.$role->name.'</a></td>';
    if($role->character === 'himself' || $role->character === 'Himself') {
      echo '<td>Lui-même</td>';

    } else {
      echo '<td>'.$role->character.'</td>';
    }
   }
   echo '</tr>';
  }
 
 $str =<<<EOD
  </tbody>
  </table>
  </div> <!-- Fin col-md-6 -->
  
EOD;
  echo $str;
  if($tab_real) {
    $str=<<<EOD
    <div class="col-md-6">
    <h3>Réalisations</h3>
    <table class="table-respo">
    <thead>
      <tr>
        <th scope="col">Années</th>
        <th scope="col">Séries</th>
        <th scope="col">Métiers</th>
      </tr>
    </thead>
    <tbody>
EOD;
    echo $str;

    foreach($tab_real as $real) {
      echo '<tr>';
      $dateReal = $real->first_air_date;
      $dateReal_explode = explode('-', $dateReal);
      $dateRealFr = (int)$dateReal_explode[0];
      echo '<td>'.$dateRealFr.'</td>';
      echo '<td><a href="serie?id='.$real->id.'">'.$real->name.'</a></td>';

      $metier = $real->job;

      switch ($metier) {
        case 'Director':
          $metier = 'Realisateur';
          break;
        case 'Producer': 
          $metier = 'Producteur';
          break;
        case 'Executive Producer': 
          $metier = 'Producteur exécutif';
          break;
        case 'Writer': 
          $metier = 'Auteur';
          break;
        default:
          $metier;
          break;
      }

      echo '<td>'.$metier.'</td>';

      echo '</tr>';
    }


    // echo '</body>';
    // echo '</table>';
    // echo '</div>';
    $str=<<<EOD
    </body>
    </table>
    </div>
EOD;
    echo $str;
  }


echo '</div>'; // Fin row
}
