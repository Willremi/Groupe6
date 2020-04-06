<?php
// Variables
$nom = 'Willebrouck';
$prenom = 'Rémi';

$age = 36;
$dixAns = 10;
$ageDans10ans = 0;
$ageDans10ans = $age + $dixAns; // 36 + 10
$b = '<br>';
/*
$bool = true; // 1
$bool0 = false; // 0
*/

// Constantes
define('TVA20', 20);
define('TVA10', 10);
define('TVA55', 5.5);

// echo TVA20;
// echo $b;
// echo TVA10;
// echo $b;
// echo TVA55;

// Tableaux
$tab1 = [];
$tab2 = array();

$tab1 = array('toto', 'tata', '23', 19);
$tab2 = [11, 'a', 19, 'B'];

// 1ere méthode
for($i = 0; $i < count($tab1); $i++) {
    // echo $tab1[$i].'<br>';
}

// 2ème méthode
foreach($tab1 as $key => $value) {
    echo "La clé".$key." et sa valeur : ".$value."<br>";
}

// 3ème
foreach($tab1 as $value) {
    echo "La valeur : ".$value."<br>";
}

var_dump($tab1);
echo $b;
var_dump($tab2);

// echo
// var_dump() // servir uniqument dour les développeur

/* echo $tata;
echo $b;
echo $toto;
echo $b;
echo $age;
echo $b;
*/

// Je m'appelle Rémi Willebrouck et j'ai 23 ans
// echo "<p>Je m'appelle ".$prenom." ".$nom." et j'ai ".$age." ans</p>";
// echo "<p>Age dans 10 ans : ".($age + $dixAns)."</p>";
// echo "<p>Age dans 10 ans : ".$ageDans10ans."</p>";

// var_dump($nom);
// var_dump($ageDans10ans);

// printf("j'ai %d ans", $age);
// printf("je m'appelle %s", $prenom);

// print_r($prenom);

?>

<!-- <p>Je m'appelle <?php echo $prenom; ?> <?php echo $nom; ?> et j'ai <?php echo $age; ?> ans</p>
<p>Je m'appelle <?=$prenom; ?> <?= $nom; ?> et j'ai <?= $age; ?> ans</p> -->