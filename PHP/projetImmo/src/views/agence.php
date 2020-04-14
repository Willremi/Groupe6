<?php
require_once 'elements/head.php';
require_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();

$db = connect();
?>
<div class="row mt-3">
    <div class="col-6">
        <a href="afficheAgence.php">
            <button type="button" class="btn btn-outline-info">Ajouter une agence</button>
        </a>
    </div>
</div>
<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom d'agence</th>
            <th scope="col">N° de la rue</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Ville</th>
        </tr>
    </thead>
</table>
<?php
footer();