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
            url: "src/ajax/listTableau.php",
            data: {
                'id': id
            },
            dataType: "html",
            success: function (response) {
                $('#result').html(response);
            }
        });
    });          

    // $('#continents form').submit(
    //     function() {
    //         $('#myTab #continents-tab').tab('show'); 

    //         $('.continent').html($('#continentList').val());
            
    //         return false;
    //     }
    // );
   
    $('#formSearch').submit(
        function(e) {
            $('#myTab #searchSerie-tab').tab('show');
            e.preventDefault();
             var $form = $(this);
             $('.resultSerie').html('<div class="loading"><img src="https://i.gifer.com/GNvR.gif" alt="En chargement..."></div>');
            $.ajax({
                type: "POST",
                url: "src/ajax/searchSerie.php", 
                data: {
                    data : $form.serializeArray()
                },
                dataType: "html",
                success: function (response) {
                    $('.resultSerie').html(response);
                }
            });
            
        } 
    );
    
    $('#formSearchAct').submit(
        function(e) {
            $('.populaireActeur').hide();
            e.preventDefault();
            var $form = $(this);
            $('.resultActeur').html('<div class="loading"><img src="https://i.gifer.com/GNvR.gif" alt="En chargement..."></div>');
            $.ajax({
                type: "POST",
                url: "src/ajax/searchActeur.php",
                data: {
                    data: $form.serializeArray()
                },
                dataType: "html",
                success: function (response) {
                  $('.resultActeur').html(response);  
                }
            });
    });

    $('#formAddComment').submit(
        function (e) {
            e.preventDefault();
            var $form = $(this);
            // $('#listComment1').html('<div class="loading"><img src="https://i.gifer.com/GNvR.gif" alt="En chargement..."></div>');
     var userLogin = $('#userLogin').html();
     var idSerie = $('#idSerie').html();
            $.ajax({
                type: "POST",
                url: "src/ajax/addComment.php",
                data: {
                    data: $form.serializeArray(), 
                    user: userLogin, 
                    idSerie: idSerie
                },
                dataType: "html",
                success: function (response) {
                    $('#listComment1').html(response);
                    window.location.assign("http://localhost:8001/serie?id="+idSerie+"#commentaire");
                }
            });
        }
    );
    
});
