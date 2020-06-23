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
            // showSelectSerie($list50);
            if(file_exists('../cache/list50.txt')) {
                echo file_get_contents('../cache/list50.txt');
            } else {
                ob_start();
                showSelectSerie($list50);
                $content50 = ob_get_contents();
                file_put_contents('../cache/list50.txt', $content50);
                ob_clean();
            }
            break;
        case 'btn60':
            echo '<h1>Liste des séries des années 60</h1>'; 
            // showSelectSerie($list60);
            if(file_exists('../cache/list60.txt')) {
                echo file_get_contents('../cache/list60.txt');
            } else {
                ob_start();
                showSelectSerie($list60);
                $content60 = ob_get_contents();
                file_put_contents('../cache/list60.txt', $content60);
                ob_clean();
            }
            break;
        case 'btn70': 
            echo '<h1>Liste des séries des années 70</h1>';
            // showSelectSerie($list70);
            if(file_exists('../cache/list70.txt')) {
                echo file_get_contents('../cache/list70.txt');
            } else {
                ob_start();
                showSelectSerie($list70);
                $content70 = ob_get_contents();
                file_put_contents('../cache/list70.txt', $content70);
                ob_clean();
            }
            break;
        case 'btn80': 
            echo '<h1>Liste des séries des années 80</h1>';
            // showSelectSerie($list80);
            if(file_exists('../cache/list80.txt')) {
                echo file_get_contents('../cache/list80.txt');
            } else {
                ob_start();
                showSelectSerie($list80);
                $content80 = ob_get_contents();
                file_put_contents('../cache/list80.txt', $content80);
                ob_clean();
            }
            break;
        case 'btn90': 
            echo '<h1>Liste des séries des années 90</h1>';
            // showSelectSerie($list90);
            if(file_exists('../cache/list90.txt')) {
                echo file_get_contents('../cache/list90.txt');
            } else {
                ob_start();
                showSelectSerie($list90);
                $content90 = ob_get_contents();
                file_put_contents('../cache/list90.txt', $content90);
                ob_clean();
            }
            break;
        case 'btn2000': 
            echo '<h1>Liste des séries des années 2000</h1>';
            // showSelectSerie($list2000);
            if(file_exists('../cache/list2000.txt')) {
                echo file_get_contents('../cache/list2000.txt');
            } else {
                ob_start();
                showSelectSerie($list2000);
                $content2000 = ob_get_contents();
                file_put_contents('../cache/list2000.txt', $content2000);
                ob_clean();
            }
            break;
    }
    ?>
    </tbody>
</table>
