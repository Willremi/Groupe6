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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
    <input type="checkbox" name="continent[]" value="Europe">Europe
    <input type="checkbox" name="continent[]" value="Amérique">Amérique
    <input type="checkbox" name="continent[]" value="Asie">Asie
    <input type="submit">
    </form>
    <?php 
    // var_dump($_POST['continent']);
    ?>
    <hr>
<table class="table-respo">
        <thead>
        <tr>
        <th scope="col">Noms</th>
        <th scope="col">Genres</th>
        <th scope="col">Acteurs</th>
        <th scope="col">Réalisateurs</th>
        <th scope="col">Années de production</th>
        <th scope="col">Pays d'origine</th>
        </tr>
        </thead>
        <tbody>
            
        <?php require 'api_select_serie.php';

    showSelectSerie();
    ?>
            
        </tbody>
    </table>

    <!-- /** 
    * Liste des années des années (exple: list50.json)
    https://api.themoviedb.org/3/list/140995?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1
    
    * Sélectionner le items->id pour avoir la liste d'acteur
    */

    /** 
    * https://api.themoviedb.org/3/tv/4177/credits?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1

    * Sélectionner les acteurs cast->name ( exple: perryMason.json) et les réalisateurs created_by->name (exple: highlander.json)

    * Années de production début first_air_date et fin last_air_date (explode('-', variable))
    
    * pays origine array origin_country(code alpha)
    */ -->

    <hr>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>