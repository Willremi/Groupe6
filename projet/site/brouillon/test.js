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
$btn = $('.btn50');


$btn.click(function () {
    $annee50.toggle("slide");;
});
    

});

