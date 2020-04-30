<?php
// Liste des séries des années 50
$url = file_get_contents('json/list50.json');
$tab_select = json_decode($url);
$tab_serie = $tab_select->items;

// Listes des genres TV
$urlGenre = file_get_contents('json/genreTv.json');
$tab_genre = json_decode($urlGenre);
$tab_genre = $tab_genre->genres;

// var_dump($tab_genre);

// var_dump($tab_serie);

echo 'liste genre_id dans list50.json<br>';

foreach ($tab_serie as $key => $serie) {
    $genreSerie = $serie->genre_ids[0];
    echo $genreSerie.'<br>';
    // var_dump($genreSerie);
    // if($genreSerie === 37) {
    //     echo 'western<br>';
    // }
}

echo '<hr>liste genre avec nom dans genreTV.json<br>';



foreach ($tab_genre as $key => $genre) {
    $idGenre = $genre->id;
    $nomGenre = $genre->name;
    echo $idGenre.' = '.$nomGenre.'<br>';
   
   
}


echo '<hr>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de genres</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>