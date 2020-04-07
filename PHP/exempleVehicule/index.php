<?php 
    require_once 'src/views/elements/head.php';
    require_once 'src/views/elements/footer.php';
    require 'src/config/config.php';
    require 'src/models/connect.php';
    
    head();

    $db = connect();

    if(isset($_POST["marq"]) && isset($_POST["mod"])) {
        $inputMarq = htmlspecialchars(trim($_POST["marq"]));
        $inputMod = htmlspecialchars(trim($_POST["mod"]));

        $sqlInsertMarq = "INSERT INTO marque(nomMarque) VALUES (:inputMarq)";

        $reqMarq = $db->prepare($sqlInsertMarq);
    }

?>
    <h1>Site de mes véhicules</h1>
    <hr>
    <div>
        <form method="post" action="views/mesVehicules.php">
            <div class="form-group">
            <label for="marque">Marque de la voiture</label>
            <input type="text" name="marq" id="marque" class="form-control">
            <label for="model">Modèle de la voiture</label>
            <input type="text" name="mod" id="model" class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-dark">Envoyer</button>
            
        </form>

    </div>
    
</div>

<?php 
  footer();  
