<?php

$date = "1965-10-09";
$dateExplode = explode("-", $date);

var_dump($dateExplode);

$annee = $dateExplode[0];
echo '<p>'.$annee.'</p>';

echo '<hr>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="checkbox" name="continent[]" value="Europe">Europe
    <input type="checkbox" name="continent[]" value="Amérique">Amérique
    <input type="checkbox" name="continent[]" value="Asie">Asie
    <input type="submit">
    </form>
    <?php 
    var_dump($_POST['continent']);
    ?>
</body>
</html>