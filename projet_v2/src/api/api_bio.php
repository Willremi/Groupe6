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
$nomActeur = $tab_bio_acteur->name;


echo '<h1>'.$nomActeur.'</h1>';
}
