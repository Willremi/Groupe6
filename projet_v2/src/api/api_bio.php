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
  echo '<img src="https://image.tmdb.org/t/p/w300'.$photo.'">';
} else {
  echo '<img src="../../public/img/LogoTV800.png" style="width: 300px;">';
}
  echo '</div>'; // fin col-md-3
$str = <<<EOD
  <div class="col-md-6">
  <p>Né(e) le $dateNaissance à $lieuBirth</p>
EOD;
echo $str;
if($dateDeces !== '') {
  echo '<p>Mort le '.$dateDeces.'</p>';
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
$str= <<<EOD
  <div class="col-md-6">
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

  // API sur interprétations et réalisations de l'acteur
  $urlDist = file_get_contents('https://api.themoviedb.org/3/person/'.$idActeur.'/tv_credits?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1');

  $tab_dist_acteur = json_decode($urlDist);
  $tab_role = $tab_dist_acteur->cast;
  $tab_real = $tab_dist_acteur->crew;

  $tabAnnee = array_column($tab_role, 'first_air_date');
  arsort($tabAnnee);
  foreach($tabAnnee as $annee) {
    $date_explode = explode('-', $annee);
    $anneeFr = $date_explode[0];
    if($anneeFr > 1950) {
      echo '<tr><td>'.$anneeFr.'</td>';
      

    }
  }
  
  
  foreach($tab_role as $role) {
    // $date = $role->first_air_date;
    // $date_explode = explode('-', $date);
    // $dateFr = (int)$date_explode[0];
    
    
   if($role->name !== 'The Emmy Awards') {
    // echo '<tr><td>'.$dateFr.'</td>';
    
   }
  
  }
 
  
  echo '</table>';
  echo '</div>'; // Fin col-md-6
 echo '</div>'; // Fin row
}
