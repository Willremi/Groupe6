<?php
$monTexte = "Voici un texte pour ma fonction";
// echo $monTexte;
echo '<br>';

$tabString = explode(' ', $monTexte);

// var_dump($tabString);

$nouveauTableau = array();

foreach ($tabString as $index => $string) {
    $chaine = "";
    if($index%2) {
        $chaine .= mb_strtoupper($string);
    } else {
        $chaine .= $string;
    }
    
    array_push($nouveauTableau, $chaine);
}

$newString = implode($nouveauTableau, ' ');

// echo $newString;

// Création de fonction
$existe = false;

function transformToUpperCase($monString) {

    $tabString = explode(' ', $monString);
    $nouveauTableau = array();

    foreach ($tabString as $index => $string) {
        $chaine = "";

        if($index%2) {
            $chaine .= mb_strtoupper($string);
        } else {
            $chaine .= $string;
        }
        
        array_push($nouveauTableau, $chaine);
    }
    // $newString = implode($nouveauTableau, ' ');
    
    // return $newString;
    return implode($nouveauTableau, '-');
}

function test($ex) {
    if($ex) {
        return 'Elle existe';
    } else {
        return 'Elle n\'existe pas';
    }
    
}

// Utilisation de la fonction
echo transformToUpperCase($monTexte);

// echo test($existe);