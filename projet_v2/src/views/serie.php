<?php 
require 'src/api/api_serie.php';
use App\Models\Comments;
use App\Models\Series;
// $nomSerie = $_GET['name'];
// $nomSerieExplode = explode(' ', $nomSerie);
// $titreSerie = implode('-', $nomSerieExplode);
$idSerie = (int)$_GET['id'];

?>

<div class="container-fluid">
  
    <?php 
             if($idSerie !== null) {
              // showDataBySerie($titreSerie);
              showDataBySerie($idSerie);
              
            }
            
      ?>
      <div class="col-sm-12 col-lg-12" id='commentaire'>
            
      <?php 
            $comment = new Comments($db);
            $serie = new Series($db);

            $serie->setApiSerieId($idSerie);
            $data = $serie->selectByApiId();
            
            $id = (int)$data->id;

            // dump($data);
            
            $comment->setSerieId($id);
            $commentaires = $comment->selectBySerieId();
            $nb_comments = count($commentaires);
            // dump($commentaires);
            if($nb_comments === 0) {
                  echo '<h3>'.$nb_comments.' Commentaire</h3>';
            } else if($nb_comments >= 1) {
                if($nb_comments === 1) {
                  echo '<h3>'.$nb_comments.' Commentaire</h3>';
                } else {
                  echo '<h3>'.$nb_comments.' Commentaires</h3>';
                }
            
                echo '<div id="listComment" class="offset-md-3 col-md-6">';
                foreach ($commentaires as $key => $commentaire):
                  echo '<div id="commentUser">';
                $commentaireUser = $commentaire['textComment'];
                $auteur = $commentaire['auteurComment'];
                $date = date('d/m/Y à H:i:s', strtotime($commentaire['dateCreation']));
                // echo '<h4>'.$auteur.'</h4><span>'.$date.'</span>';
                // echo '<p>'.$commentaireUser.'</p>';
      ?>
            <span><strong><?= $auteur ?> | </strong>
            
            <time><?= $date ?></time>
            </span><hr>
            <p><?= $commentaireUser ?></p>
      <?php
            echo '</div>';
                endforeach;
                echo '</div><br>';
            }
//---------------------------------------------
            $login = $_SESSION['login'];
            if(!$login) :
      ?>

            <div class="row justify-content-md-center">
                 
                  <div class="col-sm-2">
                  <a href="inscription">
                        <button class="btn btn-success">Inscrivez-vous</button></a>
                  </div>
                  <div class="col-sm-2">
                  <a href="connexion">
                        <button class="btn btn-primary">Connectez-vous</button></a>
                  </div> 
            
            <?php 
            else :
                  echo '<div class="offset-md-5">';
                  echo 'Vous êtes connecté(e)s en tant que '.$login;
            ?>
            <p class="d-none" id="userLogin"><?= $login ?></p>
            <p class="d-none" id="idSerie"><?= $idSerie ?></p>
               <form method="post" action="" id="formAddComment">
               <!-- <form method="post" action="addComment?id=<?= $idSerie ?>" id="formAddComment"> -->
               <div class="form-group">
                  <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Ecrivez votre commentaire" required></textarea>
            </div>
            <button type="submit" id="validComment" class="btn btn-primary">Valider</button>
               </form>   
            <?php
            endif; 
            
            ?>
      </div>
      <div id="listComment1" class="offset-md-3 col-md-6"></div>
</div> <!-- fin container -->
