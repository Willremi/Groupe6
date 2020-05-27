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
        // $page = 1;
        showPopAct($page);
        
        $str=<<<EOD
        <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
EOD;
        echo $str;
        
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        } 
        else{
            $currentPage = 1;
        }
        $pages = 500;
        
        ?>
        <li class="page-item <?= ($currentPage == 1) ? 'disabled' : '' ?>">
        <a class="page-link" href="?page=<?= $currentPage - 1 ?>">Précédent</a>
                </li>
                <li class="page-item <?= ($currentPage == $pages) ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $currentPage + 1 ?>">Suivant</a>
                </li>
            </ul>
        </nav>
        <?php 
        if($currentPage > $pages) {
            echo '<meta http-equiv="refresh" content="0;URL=?page='.$pages.'">';
        }
        
        ?>
    
    </div>
    <div class="resultActeur"></div>
        
    
</div> <!-- fin container -->
