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

    $('#continents form').submit(
        function() {
            $('#myTab #continents-tab').tab('show'); 

            $('.continent').html($('#continentList').val());
            
            return false;
        }
    );
   
    // $('#searchCont').submit(
    //     function(e) {
            
    //         e.preventDefault;
    //         $('#myTab #continents-tab').tab('show'); 
    //         $.ajax({
    //             type: "POST",
    //             url: "../../src/views/listSeries.php", 
    //             data: {
    //                 continent : $('#continents').val()
    //             },
    //             dataType: "html",
    //             success: function (response) {
    //                 $('.continent').html(response);
    //             }
    //         });
            
    //     }
    // );
});
