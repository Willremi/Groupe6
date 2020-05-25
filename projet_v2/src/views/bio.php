<?php
require 'src/api/api_bio.php';
$idActeur = $_GET['id'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php 
            if($idActeur !== null) {
                // showDataBySerie($titreSerie);
                showBio($idActeur);
                
              }
            ?>
        </div>
    </div>
</div>