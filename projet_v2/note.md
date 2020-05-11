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