<?php 
$hr = '<hr>';

$marqueAuto = ['Fiat', 'Mazda', 'Ford', 'Mustang', 'Toyota'];

foreach($marqueAuto as $key => $value) {
    echo 'La clé '.$key. ' et sa valeur : '.$value.'<br>';
}

echo $hr;

$tabPhone = array (
                    "Huawei" => "P40", 
                    "Xiaomi" => "Mi Note 10", 
                    "Samsung" => "Galaxy S20"
            );

foreach ($tabPhone as $marque => $type) {
    echo $marque." : ".$type."<br>";
}
?>