utiliser sass  
sass --watch public/sass/style.scss public/css/style.css

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

$sqlSelUser = "SELECT pseudoUser, mdpUser FROM user WHERE pseudoUser = :inputPseudo";
$reqSelUser = $db->prepare($sqlSelUser);
$reqSelUser->bindParam(':inputPseudo', $pseudoInput);
$reqSelUser->execute();

$data = $reqSelUser->fetchObject();
// var_dump($data);
if(password_verify($_POST['inputMdp'], $data->mdpUser)) {
    if(isset($_SESSION['login'])) {
    $pseudo = $_SESSION['login'];
    } else {
    $_SESSION['login'] = $data->pseudoUser;
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

listSerie.php

<div class="row">
              <div class="col-sm-12 col-md-12" id="annee50">
                  <h1>Liste des séries des années 50</h1>
                  <hr>
                  <!-- <table class="table-respo">
                      <thead>
                          <tr>
                              <th scope="col">Noms</th>
                              <th scope="col">Genres</th>
                              <th scope="col">Acteurs</th>
                              <th scope="col">Réalisateurs</th>
                              <th scope="col">Années de production</th>
                              <th scope="col">Pays d'origine</th>
                              
                          </tr>
                      </thead> -->
                      <?php 
                       
                      tableau();
                      ?>
                      <tbody>
                          
                          <?php 
                          // require 'src/api/api_select_serie.php';
                          showSelectSerie($list50);
                          ?>
                      </tbody>
                  </table>
              </div>
              
              <div class="col-sm-12 col-md-12" id="annee60">
                  <h1>Liste des séries des années 60</h1>
                  <hr>
                  <?php tableau(); ?>
                      <tbody>
                        <?php 
                          showSelectSerie($list60);
                          ?>
                      </tbody>
                  </table>
              </div>
              <div class="col-sm-12 col-md-12" id="annee70">
                  <h1>Liste des séries des années 70</h1>
                  <hr>
                  <?php tableau(); ?>
                      <tbody>
                          <!-- <tr>
                              <td><a href="#">L'Île perdue</a></td>
                              <td>Aventure, Famille</td>
                              <td>Tony Hughes, Jane Wallis</td>
                              <td>Michael Lawrence</td>
                              <td>1976</td>
                              <td>Australie</td>
                          </tr> -->
                          <?php 
                          showSelectSerie($list70);
                          ?>
                      </tbody>
                  </table>
              </div>
              <div class="col-sm-12 col-md-12" id="annee80">
                  <h1>Liste des séries des années 80</h1>
                  <hr>
                  <?php tableau(); ?>
                      <tbody>
                          <!-- <tr>
                              <td><a href="#">Bioman</a></td>
                              <td>Action, Science Fiction</td>
                              <td>Ryosuke Sakamoto, Naoto Tada</td>
                              <td>Saburo Hatte, Yatsude</td>
                              <td>1984 - 1985</td>
                              <td>Japon</td>
                          </tr> -->
                          <?php 
                          showSelectSerie($list80);
                          ?>
                      </tbody>
                  </table>
              </div>
              <div class="col-sm-12 col-md-12" id="annee90">
                  <h1>Liste des séries des années 90</h1>
                  <hr>
                  <?php tableau(); ?>
                      <tbody>
                          <!-- <tr>
                              <td><a href="#">Highlander</a></td>
                              <td>Fantastique</td>
                              <td>Adrian Paul, Jim Byrnes, Elizabeth Gracen</td>
                              <td>Gregory Widen</td>
                              <td>1992 - 1998</td>
                              <td>Canada, France</td>
                          </tr> -->
                          <?php 
                          showSelectSerie($list90);
                          ?>
                      </tbody>
                  </table>
              </div>
              <div class="col-sm-12 col-md-12" id="annee2000">
                  <h1>Liste des séries des années 2000</h1>
                  <hr>
                  <?php tableau(); ?>
                      <tbody>
                          <!-- <tr>
                              <td><a href="#">Tessa à la pointe de l'épée</a></td>
                              <td>Aventure, Western</td>
                              <td>Tessie Santiago, Anthony Lemke, Peter Wingfield</td>
                              <td>David Abramowitz</td>
                              <td>2000 - 2001</td>
                              <td>Canada, Espagne, USA, France, Royaume-Uni</td>
                          </tr> -->
                          <?php 
                          showSelectSerie($list2000);
                          ?>
                      </tbody>
                  </table>
              </div>
            </div>

//serie.php
<div class="row">
          <div class="col-sm-8">
            <p><strong>Les Incorruptibles</strong> (The Untouchables) est une série télévisée policière américaine en un pilote de 90 minutes et 118 épisodes de 50 minutes, en noir et blanc, créée par Quinn Martin et diffusée entre le 20 avril 1959 et le 21 mai 1963 sur le réseau ABC. Elle y a rencontré un très grand succès : à son apogée, elle était suivie par un ménage américain sur trois.</p>
            <p>En France, la série a été diffusée à partir du 5 janvier 1964 sur RTF Télévision puis sur la première chaîne de l'ORTF, et au Québec à partir du 8 septembre 1965 à la Télévision de Radio-Canada.</p>
            <p>Un remake de la série est diffusé entre 1993 et 1994, créé par Christopher Crowe.</p>
            <hr id="ligne">
            
          </div>
          <div class="col-sm-4" id="distribution">
            <h3>Acteurs principaux</h3>
                <ul>
                  <li>Robert Stack : Elliot Ness</li>
                  <li>Walter Winchell : le narrateur</li>
                  <li>Nicholas Georgiade : Enrico Rossi</li>
                  <li>Paul Picerni : Lee Hobson</li>
                  <li>Abel Fernandez : William Youngfellow</li>
                  <li>Steve London : Jack Rossman</li>
                </ul>
                <h3>Pays d'origine</h3>
                <p>Etats-Unis</p>
                <h3>Nombre de saisons</h3>
                <p>4 saisons</p>
          </div>
          <div class="col-sm-12 col-lg-12">
            <hr>
            <h3>Résumé</h3>
            <p>Située à Chicago au temps de la prohibition, la série suivait les exploits de l'agent spécial du Trésor Eliot Ness et de son petit groupe d'agents dans leur lutte inlassable contre les membres de la pègre.
              Les Incorruptibles demeure sans contredit l'émission de télévision la plus violente dans les années 1960. Il faut dire que le théâtre s'y prêtait bien.</p>
            <hr>
            <h3>Achat de vidéos</h3>
            <table class="table-respo">
              <thead>
                  <tr>
                      <th scope="col">Pilote (1959)</th>
                      <th scope="col">Saison 1 (1959-1960)</th>
                      <th scope="col">Saison 2 (1960-1961)</th>
                      <th scope="col">Saison 3 (1961-1962)</th>
                      <th scope="col">Saison 4 (1962-1963)</th>                      
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>2 parties</td>
                      <td>28 épisodes</td>
                      <td>32 épisodes</td>
                      <td>28 épisodes</td>
                      <td>30 épisodes</td>
                  </tr>
              </tbody>
          </table>
          <br>
          <h3>Musiques</h3> 
            <div class="row">
              <div class="col-md-6">
                <p> Nelson Riddle est un jazzman très en vogue à l'époque qui est appelé aux commandes de la musique. Il signe le thème principal et les musiques des différents épisodes. Douze de celles-ci, ainsi que la générique historique, figurent sur l'album publié en 1960.</p>
                <p>Arrangeur des plus beaux disques de Frank Sinatra (période Capitol), il est un excellent orchestrateur qui transforme tout ce qu'il touche en or. On en finit par oublier qu'il fut aussi un formidable compositeur comme le rappelle cette musique du feuilleton le plus suivi des années 60 (un ménage américain sur trois lors de sa diffusion) : Les Incorruptibles. Cette série, diffusée sur l'unique chaine française à partir de 1964, demeure sans contredit l'émission de télévision la plus violente dans les années 1960. Il faut dire que le théâtre s'y prêtait bien. Située à Chicago au temps de la prohibition, la série suivait les exploits de l'agent spécial du Trésor Eliot Ness et de son petit groupe d'agents dans leur lutte inlassable contre les membres de la pègre. La musique est une réussite qui souligne, soit en accompagnant soit en contrepoint, les moments forts. Une référence dans le genre !</p>
              </div>
              <!-- <div class="col-md-4">
                <iframe src="https://open.spotify.com/embed?uri=spotify:album:4Ep0zbv1yMHl0hwrTJejl8" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
              </div> -->
            </div> <!-- fin row -->
            <h3>Stickers ou photos</h3>
            <div class="" id="imageSerie">
              <img src="../../public/img/incorrup1.jpg" alt="" class="img-thumbnail mr-2">   
                <img src="../../public/img/incorrup2.jpg" alt="" class="img-thumbnail mr-2">   
                <img src="../../public/img/incorrup3.jpg" alt="" class="img-thumbnail mr-2"> 
                <img src="../../public/img/incorrup4.jpg" alt="" class="img-thumbnail">  
              </div>
              
          </div> <!-- fin col-lg-12 -->
          
        </div> <!-- fin row -->

page addUser.php

if(isset($_POST['inputName'])) {
    $nom = htmlspecialchars(trim($_POST['inputName']));
} else {
    $nom = '';
}

if(isset($_POST['inputFirstname'])) {
    $prenom = htmlspecialchars(trim($_POST['inputFirstname']));
} else {
    $prenom = '';
}

if(isset($_POST['inputPseudo'])) {
    $pseudoInsert = htmlspecialchars(trim($_POST['inputPseudo']));
} else {
    $pseudoInsert = '';
}

if(isset($_POST['inputEmail'])) {
    $email = htmlspecialchars(trim($_POST['inputEmail']));
} else {
    $email = '';
}

if(isset($_POST['inputMdp'])) {
    $mdp = password_hash(htmlspecialchars(trim($_POST['inputMdp'])), PASSWORD_BCRYPT);
} else {
    $mdp = '';
}

if($_POST['inputNumAdress']) {
    $numRue = htmlspecialchars(trim($_POST['inputNumAdress']));
} else {
    $numRue = '';
}

if(isset($_POST['inputAdress'])) {
    $adresse = htmlspecialchars(trim($_POST['inputAdress']));
} else {
    $adresse = '';
}

if($_POST['inputAdress2']) {
    $adresseCompl = htmlspecialchars(trim($_POST['inputAdress2']));
} else {
    $adresseCompl = '';
}

if(isset($_POST['inputCp'])) {
    $cp = htmlspecialchars(trim($_POST['inputCp']));
} else {
    $cp = '';
}

if(isset($_POST['inputCity'])) {
    $ville = htmlspecialchars(trim($_POST['inputCity']));
} else {
    $ville = '';
}
