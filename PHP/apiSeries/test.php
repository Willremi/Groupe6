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
        <tr>
        <td><a href="">Les Incorruptibles</a></td>
        <td>Policier</td>
        <td>Robert Stack, Abel Fernandez</td>
        <td>Quinn Martin</td>
        <td>1959 - 1963</td>
        <td>USA</td>
        </tr>
        </tbody>
    </table>

    /** 
    * Liste des années des années (exple: list50.json)
    https://api.themoviedb.org/3/list/140995?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1
    
    * Sélectionner le items->id pour avoir la liste d'acteur
    */

    /** 
    * https://api.themoviedb.org/3/tv/4177/credits?api_key=c595147bf4af143ab2df16843f9487bf&language=fr-FR&page=1

    * Sélectionner les acteurs cast->name ( exple: perryMason.json) et les réalisateurs created_by->name (exple: highlander.json)

    * Années de production début first_air_date et fin last_air_date (explode('-', variable))
    
    * pays origine array origin_country(code alpha)
    */
</body>
</html>