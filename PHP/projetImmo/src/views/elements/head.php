<?php 
function head() {
    
    session_start();
    if(isset($_SESSION['login'])) {
        $pseudo = $_SESSION['login'];
    } else {
        
        $pseudo = '';
    }

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="public/css/index.css"> -->

    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">DamienLocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/src/views/location.php">Location</a>
            </li>
            <?php 
            if($pseudo === "willremi") {
                ?>
                <li class="nav-item">
                <a class="nav-link" href="/src/views/gererMesBiens.php">Gérer Mes Biens</a>
            </li>
                <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="/src/views/agence.php">Agence</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/src/views/contact.php">Contact</a>
            </li>
            <?php 
                if ($pseudo === "willremi") {
                    ?>
            <li class="nav-item">
            <a class="nav-link" href="/src/views/logout.php">Logout</a>
                </li>
            <?php
                } else {
                    ?>
                  <li class="nav-item">
                    <a class="nav-link" href="/src/views/login.php">Abonné</a>
                </li>  
            <?php
            } 
            ?>
        </ul>
    </div>
</nav>

<div class="container">
<?php
}