head.php

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

index.php
// Sélection pseudo et mot de passe de l'utilisateur
$pseudoInput = $_POST['inputPseudo'];

$sqlSelUser = "SELECT pseudoUser, mdpUser FROM user WHERE pseudoUser = ".$pseudoInput;
$reqSelUser = $db->prepare($sqlSelUser);
$reqSelUser->execute();

$data = $reqSelUser->fetchObject();

if(password_verify($_POST['inputMdp'], $data->mdpUser)) {
    if(isset($_SESSION['login'])) {
    $pseudo = $_SESSION['login'];
    } else {
    $_SESSION['login'] = $pseudoInput;
    $pseudo = $_SESSION['login'];
    }
    header('location: /');
}

head.php

// Sélection pseudo et mot de passe de l'utilisateur
            $sqlSelUser = "SELECT pseudoUser, mdpUser FROM user WHERE pseudoUser = ".$_SESSION['login'];
            $reqSelUser = $db->prepare($sqlSelUser);
            $reqSelUser->execute();
            
            $data = $reqSelUser->fetchObject();