<div class="container">
    <fieldset>
        <legend>Rechercher un acteur ou une actrice : </legend>
        <div class="">
            <form action="" class="mt-2" method="POST" id="formSearchAct">
            <div class="form-row">
                <div class="form-group offset-md-3 col-md-6">
                    <input type="text" name="nomAct" id="nomAct" class="form-control" placeholder="Veuillez mettre le nom et prénom de l'acteur que vous recherchez">
                    <br>
                    <button type="submit" class="btn btn-primary" value="Rechercher" id="searchAct">Rechercher</button>
            </div>
            </form>
        </div>
    </fieldset>
    <div class="populaireActeur">
        <h1>Artistes populaires</h1>
        <?php 
        require 'src/api/api_pop_acteur.php';
        $page = 1;
        showPopAct($page);
        echo '<div class="offset-md-4">';
        echo '<i class="fas fa-angle-left">Précédent</i>';
        echo '<span class="fas">/</span>';
        echo '<pan class="fas">Suivant<i class="fas fa-angle-right"></i><span>';
        echo '</div>';
        ?>
    </div>
    <div class="resultActeur"></div>
        
    
</div> <!-- fin container -->
