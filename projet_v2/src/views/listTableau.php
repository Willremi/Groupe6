<?php 
require 'functionTable.php';

tableau();

?>
<tbody>
    <?php 
    require '../api/api_select_serie.php';
    // showSelectSerie($list50);
    switch ($_POST['id']) {
        case 'btn50':
            echo '<h1>Liste des séries des années 50</h1>';
            showSelectSerie($list50);
            break;
        case 'btn60':
            echo '<h1>Liste des séries des années 60</h1>'; 
            showSelectSerie($list60);
            break;
        case 'btn70': 
            echo '<h1>Liste des séries des années 70</h1>';
            showSelectSerie($list70);
            break;
        case 'btn80': 
            echo '<h1>Liste des séries des années 80</h1>';
            showSelectSerie($list80);
            break;
        case 'btn90': 
            echo '<h1>Liste des séries des années 90</h1>';
            showSelectSerie($list90);
            break;
        case 'btn2000': 
            echo '<h1>Liste des séries des années 2000</h1>';
            showSelectSerie($list2000);
            break;
    }
    ?>
    </tbody>
</table>
