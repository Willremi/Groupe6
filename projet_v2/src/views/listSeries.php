<?php 
$pageTitle = 'Recherche de série';
require 'src/api/api_select_serie.php';
?>

<div class="container-fluid">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="annees-tab" data-toggle="tab" href="#annees" role="tab" aria-controls="annees" aria-selected="true">Années</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="continents-tab" data-toggle="tab" href="#continents" role="tab" aria-controls="continents" aria-selected="false">Continents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="genres-tab" data-toggle="tab" href="#genres" role="tab" aria-controls="genres" aria-selected="false">Genres</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="annees" role="tabpanel" aria-labelledby="annees-tab">
            <ul class="nav nav-pills nav-justified">
              <li class="nav-item">
                <p class="nav-link">
                    <button type="submit" class="btn btn-secondary" id="btn50">Années 50</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="submit" class="btn btn-info" id="btn60">Années 60</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="submit" class="btn btn-success" id="btn70">Années 70</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="submit" class="btn btn-primary" id="btn80">Années 80</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="submit" class="btn btn-warning" id="btn90">Années 90</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="submit" class="btn btn-danger" id="btn2000">Années 2000</button>
                </p>
              </li>  
            </ul>
            <div class="row">
              <div class="col-sm-12 col-md-12" id="annee50">
                  <h1>Liste des séries des années 50</h1>
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
                          <!-- <tr>
                              <td><a href="<?php echo $router->generate('incorruptibles') ?>">Les Incorruptibles</a></td>
                              <td>Policier</td>
                              <td>Robert Stack, Abel Fernandez</td>
                              <td>Quinn Martin</td>
                              <td>1959 - 1963</td>
                              <td>USA</td>
                          </tr> -->
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
                          <!-- <tr>
                              <td><a href="#">Doctor Who (première série)</a></td>
                              <td>Science Fiction</td>
                              <td>Sylvester McCoy, Sophie Aldred</td>
                              <td>Sydney Newman, Donald Wilson</td>
                              <td>1963 - 1996</td>
                              <td>Royaume-Uni</td>
                          </tr> -->
                          <?php 
                          showSelectSerie($list60);
                          ?>
                      </tbody>
                  </table>
              </div>
              <div class="col-sm-12 col-md-12" id="annee70">
                  <h1>Liste des séries des années 70</h1>
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
            </div> <!-- fin row -->
          </div>
          <div class="tab-pane fade" id="continents" role="tabpanel" aria-labelledby="continents-tab">
            <div class="container">
              <fieldset>
                <legend>Sélectionner un ou deux continents : </legend>
                <form action="" class="mt-2">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="continent1" value="Afrique">
                    <label class="form-check-label" for="continent1">Afrique</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="continent2" value="Amérique du Nord">
                    <label class="form-check-label" for="continent2">Amérique du Nord</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="continent3" value="Amérique du Sud">
                    <label class="form-check-label" for="continent3">Amérique du Sud</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="continent4" value="Asie">
                    <label class="form-check-label" for="continent4">Asie</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="continent5" value="Europe">
                    <label class="form-check-label" for="continent5">Europe</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="continent6" value="Océanie">
                    <label class="form-check-label" for="continent6">Océanie</label>
                  </div>
                  <input type="button" class="btn btn-primary" value="Rechercher">
                </form>
              </fieldset>
            </div>
            <!-- <p>Travail pour plus tard : je sélectionne un continent, je dois faire apparaitre une liste des pays du continent sélectionné</p>
            <p>Si deux continents sélectionnés, faire apparaître deux listes</p>
            <p>Après sélection de continent, le formulaire disparait en faisant apparaitre la liste de pays</p> -->
          </div>
          <div class="tab-pane fade" id="genres" role="tabpanel" aria-labelledby="genres-tab">
            <div class="container">
              <fieldset>
                <legend>Sélectionner un ou deux genres : </legend>
                <form action="" class="mt-2">
                  <div class="form-group">
                    <label for="genres">Genres</label>
                    <select multiple class="form-control" id="genres">
                      <!-- <option>Policier</option>
                      <option>Action</option>
                      <option>Aventure</option>
                      <option>Science-Fiction</option>
                      <option>Fantastique</option> -->
                      <?php 
                      require 'src/api/api_genre_tv.php';

                      showGenreSerie();
                      ?>
                    </select>
                  </div>
                  <input type="button" class="btn btn-primary" value="Rechercher">
                </form>
              </fieldset>
            </div>
          </div>
        </div>


        
      </div> <!-- fin container -->