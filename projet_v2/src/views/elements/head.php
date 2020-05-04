<?php

// function head() {
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rétro Série</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="public/img/LogoTV.png">
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">
            <img src="public/img/LogoTV.png" alt="Logo du site">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Recherche">Liste des séries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Streaming/Blu-ray</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Musiques</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Stickers</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#">Acteurs</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
          </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">Panier : <span>0</span>
              </a>
            </li>
            <li class="nav-item avatar dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Se connecter/S'inscrire
              </a>
              <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                aria-labelledby="navbarDropdownMenuLink-55">
                <a class="dropdown-item" href="connexion">Connexion</a>
                <a class="dropdown-item" href="inscription">Inscription</a>
                
              </div>
            </li>
            <!-- <li class="nav-item avatar dropdown">
              <a class="nav-link" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pseudo
              </a>
              <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                aria-labelledby="navbarDropdownMenuLink-55">
                <a class="dropdown-item" href="#">Compte</a>
                <a class="dropdown-item" href="#">Déconnexion</a>
                
              </div>
            </li> -->
          </ul>
        </div>
      </nav>
      <header>
        <div class="jumbotron jumbotron-fluid" id="jumbotron">
            <div class="container">
              <h1 class="display-4">RétroSérie</h1>
            </div>
          </div>
      </header>
<?php
// }
