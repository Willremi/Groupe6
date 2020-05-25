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

echo '<h1>'.$nomActeur.'</h1>';



}
