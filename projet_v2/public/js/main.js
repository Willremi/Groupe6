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
     
    var btn = $('button');
    btn.click(function (e) { 
        e.preventDefault();
        let id = this.id;
    
        $.ajax({
            method: 'POST',
            url: "src/views/listTableau.php",
            data: {
                'id': id
            },
            dataType: "html",
            success: function (response) {
                $('#result').html(response);
            }
        });
    });          


});
