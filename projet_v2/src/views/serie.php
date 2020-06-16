<?php 
require 'src/api/api_serie.php';
// $nomSerie = $_GET['name'];
// $nomSerieExplode = explode(' ', $nomSerie);
// $titreSerie = implode('-', $nomSerieExplode);
$idSerie = $_GET['id'];

?>

<div class="container-fluid">
  
    <?php 
             if($idSerie !== null) {
              // showDataBySerie($titreSerie);
              showDataBySerie($idSerie);
            }
             
      ?>
      <div class="col-sm-12 col-lg-12">
            <h3>Commentaires</h3>
            <?php 
            $login = $_SESSION['login'];
            if(!$login) :
            
            ?>
            <div class="">
                <form method="POST" action="">
                    <div class="form-group">
                        <div class="form-group offset-md-3 col-md-6">
                        <label for="inputPseudo">Pseudo</label>
                        <input type="text" class="form-control" id="inputPseudo" name="inputPseudo">
                        </div>
                    <div class="form-group">
                        <div class="form-group offset-md-3 col-md-6">
                            <label for="inputMdp">Mot de passe</label>
                            <input type="password" class="form-control" id="inputMdp" name="inputMdp">
                        </div>
                    </div>
                    <div class="offset-md-6">
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </form>
                
            </div>

            <?php endif ?>
      </div>
</div> <!-- fin container -->
