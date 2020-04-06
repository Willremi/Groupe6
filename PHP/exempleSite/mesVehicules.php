<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marques de voitures</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
   <?php 
   $tabVoiture = array (
                        "Fiat" => "Panda 4x4", 
                        "Ferrari" => "Testarossa", 
                        "Citroën" => "2CV", 
                        "Renault" => "R8 Gordini", 
                        "Subaru" => "Impreza", 
                        "Austin" => "Mini 850", 
                        "Jeep" => "Wrangler", 
                        "Plymouth" => "Barracuda"
       );
   ?> 
   <table>
       <thead>
           <tr>
               <th>Marques de voiture</th>
               <th>Modèles</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($tabVoiture as $marque => $modele) { ?>
           <tr>
               <td><?= $marque; ?></td>
               <td><?= $modele; ?></td>
            </tr>
           <?php } ?>
       </tbody>
   </table>
</body>
</html>