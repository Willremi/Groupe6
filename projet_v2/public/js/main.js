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
     
    var btn = $('.listSerie');
    btn.click(function (e) { 
        e.preventDefault();
        let id = this.id;
        $('#result').html('<div class="loading"><img src="https://i.gifer.com/GNvR.gif" alt="En chargement..."></div>');
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

    // $('#searchCont').click(function() {
        
    //     $('#myTab #continents-tab').tab('show');
    //     var valeur = $('#continents').value;
    //     console.log(valeur);
       
        
    // });
   

});
