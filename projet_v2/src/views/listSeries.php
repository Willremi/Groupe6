<?php 
require 'functionTable.php';
require 'src/api/api_select_serie.php';

?>

<div class="container-fluid">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="annees-tab" data-toggle="tab" href="#annees" role="tab" aria-controls="annees" aria-selected="true">Années</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="searchSerie-tab" data-toggle="tab" href="#searchSerie" role="tab" aria-controls="searchSerie" aria-selected="false">Recherche</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" id="genres-tab" data-toggle="tab" href="#genres" role="tab" aria-controls="genres" aria-selected="false">Genres</a>
          </li> -->
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane active" id="annees" role="tabpanel" aria-labelledby="annees-tab">
            <ul class="nav nav-pills nav-justified">
              <li class="nav-item">
                <p class="nav-link">
                    <button type="button" class="btn btn-secondary listSerie" id="btn50">Années 50</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="button" class="btn btn-info listSerie" id="btn60">Années 60</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="button" class="btn btn-success listSerie" id="btn70">Années 70</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="button" class="btn btn-primary listSerie" id="btn80">Années 80</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="button" class="btn btn-warning listSerie" id="btn90">Années 90</button>
                </p>
              </li>
              <li class="nav-item">
                <p class="nav-link">
                  <button type="button" class="btn btn-danger listSerie" id="btn2000">Années 2000</button>
                </p>
              </li>  
            </ul>
            <div class="row">
              <col-sm-12 class="col-md-12" id="result"></col-sm-12>
            </div>
             <!--voir note.md fin row -->
          </div>
          <div class="tab-pane" id="searchSerie" role="tabpanel" aria-labelledby="searchSerie-tab">
            <div class="container">
              <fieldset>
                <legend>Rechercher une série : </legend>
                <div class="offset-md-2">
                <form action="" class="mt-2 form-inline" method="POST" id="formSearch">
                <input type="text" name="nomSerie" id="nomSerie" class="form-control"placeholder="Higlander, les incorruptibles...">
                
                <select name="annees" class="custom-select" id="anneesList">
                  <option value="">Sélectionner une décennie</option>
                  <option value="Années 50">Années 50</option>
                  <option value="Années 60">Années 60</option>
                  <option value="Années 70">Années 70</option>
                  <option value="Années 80">Années 80</option>
                  <option value="Années 90">Années 90</option>
                  <option value="Années 2000">Années 2000</option>
                </select>

                <select name="continents" class="custom-select" id="continentList">
                  <option value="">Sélectionner un continent</option>
                  <option value="Asie">Asie</option>
                  <option value="Afrique">Afrique</option>
                  <option value="Amériques">Amériques</option>
                  <option value="Europe">Europe</option>
                  <option value="Océanie">Océanie</option>
                </select>
                  <button type="submit" class="btn btn-primary" value="Rechercher" id="searchCont">Rechercher</button>
                </form>
                </div>
              </fieldset>
            </div>
            <!-- <p>Travail pour plus tard : je sélectionne un continent, je dois faire apparaitre une liste des pays du continent sélectionné</p>
            <p>Si deux continents sélectionnés, faire apparaître deux listes</p>
            <p>Après sélection de continent, le formulaire disparait en faisant apparaitre la liste de pays</p> -->
            <div class='resultSerie'></div>
            
           
          </div>
          <div class="tab-pane" id="genres" role="tabpanel" aria-labelledby="genres-tab">
            <div class="container">
              <fieldset>
                <legend>Sélectionner un genre : </legend>
                <form action="" class="mt-2">
                  <div class="form-group">
                    <select class="form-control" id="genres">
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
                  <input type="submit" class="btn btn-primary" id="searchGen" value="Rechercher">
                </form>
              </fieldset>
            </div>
          </div>
        </div>


        
      </div> <!-- fin container -->