<?php 
require 'src/api/api_serie.php';
$nomSerie = $_GET['name'];
$nomSerieExplode = explode(' ', $nomSerie);
$titreSerie = implode('-', $nomSerieExplode);

// dump($titreSerie);



?>

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- <h1>Les incorruptibles</h1> -->
             <?php 
             if($titreSerie !== null) {
              showDataBySerie($titreSerie);
            }
             
             ?> 
            <!-- <hr> -->
          </div>
          <!-- <div class="offset-md-2 col-sm-3">
            <strong>Genres :</strong>
            <p>Policier</p>
          </div> -->
          <div class="col-sm-3">
            <strong>Réalisateurs :</strong>
            <p>Quinn Martin</p>
          </div>
          <div class="col-sm-3">
            <strong>Années de diffusion :</strong>
            <p>1959 - 1963</p>
          </div>
          
        </div> <!-- fin row -->
        <hr>
        <div class="row">
          <div class="col-sm-8">
            <p><strong>Les Incorruptibles</strong> (The Untouchables) est une série télévisée policière américaine en un pilote de 90 minutes et 118 épisodes de 50 minutes, en noir et blanc, créée par Quinn Martin et diffusée entre le 20 avril 1959 et le 21 mai 1963 sur le réseau ABC. Elle y a rencontré un très grand succès : à son apogée, elle était suivie par un ménage américain sur trois.</p>
            <p>En France, la série a été diffusée à partir du 5 janvier 1964 sur RTF Télévision puis sur la première chaîne de l'ORTF, et au Québec à partir du 8 septembre 1965 à la Télévision de Radio-Canada.</p>
            <p>Un remake de la série est diffusé entre 1993 et 1994, créé par Christopher Crowe.</p>
            <hr id="ligne">
            <!-- <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div> -->
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
      </div> <!-- fin container -->
