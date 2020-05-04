<?php
function tableau() {
 ?>
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
        <?php 
         require 'api_select_serie.php';

        // showSelectSerie($list50);
        // showSelectSerie($list60);
        // showSelectSerie($list70);
        showSelectSerie($list80);
        // showSelectSerie($list90);
        // showSelectSerie($list2000);
        
        ?>
    </tbody>
<?php
}
?>