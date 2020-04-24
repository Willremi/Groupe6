document.addEventListener('DOMContentLoaded', function () {
    // Pour chaque tableau table
        // Je collecte les labels
    document.querySelectorAll('.table-respo').forEach(function (table) {
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
$annee70 = $('#annee70');
$annee80 = $('#annee80');
$annee90 = $('#annee90');
$annee2000 = $('#annee2000');

$btn50 = $('#btn50');
$btn60 = $('#btn60');
$btn70 = $('#btn70');
$btn80 = $('#btn80');
$btn90 = $('#btn90');
$btn2000 = $('#btn2000');

$btn50.click(function () {
    $annee50.toggle("slide");
    $annee60.hide();
    $annee70.hide();
    $annee80.hide();
    $annee90.hide();
    $annee2000.hide();
});

$btn60.click(function () {
    $annee60.toggle("slide");
    $annee50.hide();
    $annee70.hide();
    $annee80.hide();
    $annee90.hide();
    $annee2000.hide();
});

$btn70.click(function () {
    $annee70.toggle("slide");
    $annee50.hide();
    $annee60.hide();
    $annee80.hide();
    $annee90.hide();
    $annee2000.hide();
});

$btn80.click(function () {
    $annee80.toggle("slide");
    $annee50.hide();
    $annee60.hide();
    $annee70.hide();
    $annee90.hide();
    $annee2000.hide();
});

$btn90.click(function () {
    $annee90.toggle("slide");
    $annee50.hide();
    $annee60.hide();
    $annee70.hide();
    $annee80.hide();
    $annee2000.hide();
});

$btn2000.click(function () {
    $annee2000.toggle("slide");
    $annee50.hide();
    $annee60.hide();
    $annee70.hide();
    $annee80.hide();
    $annee90.hide();
});



});