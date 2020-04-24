document.addEventListener('DOMContentLoaded', function () {
    // Pour chaque tableau table
        // Je collecte les labels
    document.querySelectorAll('.table-responsive').forEach(function (table) {
        let labels = Array.from(table.querySelectorAll('th')).map(function(th) {
            return th.innerText;
        });
        // Pour chaque td dans table
            // On récupère l'index du td
            // On va mettre le data-label qui correspond
        table.querySelectorAll('td').forEach(function (td, i) {
             td.setAttribute('data-label', labels[i % labels.length]);
             
        });
    });
     
$annee50 = $('#annee50');
$annee60 = $('#annee60');
$btn = $('.btn50');
$btn60 = $('.btn60');


$btn.click(function () {
    $annee50.toggle("slide");
    $annee60.hide();
});

$btn60.click(function() {
    $annee60.toggle("slide");
    $annee50.hide();
});

});

var Asie = ['Japon', 'Corée du Sud'];
var AmeriqueNord = ['Canada', 'USA'];
var Europe = ['Allemagne', 'France', 'Royaume-Uni'];

var continents = [
    'Afrique', 
    Asie, 
    AmeriqueNord, 
    'Amérique du Sud', 
    Europe, 
    'Océanie'
];

console.log(continents);
