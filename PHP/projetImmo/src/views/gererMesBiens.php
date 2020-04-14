<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();

 ?>

<h2>Gérer les biens</h2>
<?php
    if(isset($_GET['empty'])){
        if($_GET['empty'] == true){
            ?>
            <div class="alert alert-danger" role="alert">
            Ces champs ne peuvent pas être vides.
            </div>
            <?php
        }
    }
        ?>
<a href="addMaison.php"><button type="button" class="btn btn-primary">Ajouter un bien</button></a>


<?php
footer();