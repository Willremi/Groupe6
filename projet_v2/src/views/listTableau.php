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
            showSelectSerie($list50);
            break;
        case 'btn60': 
            showSelectSerie($list60);
            break;
        case 'btn60': 
            showSelectSerie($list60);
            break;
        case 'btn70': 
            showSelectSerie($list70);
            break;
        case 'btn80': 
            showSelectSerie($list80);
            break;
        case 'btn90': 
            showSelectSerie($list90);
            break;
        case 'btn2000': 
            showSelectSerie($list2000);
            break;
    }
    ?>
    </tbody>
</table>
