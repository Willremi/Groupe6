function traitement() {
    alert('Image cliquée');
}

$('#activer').on('click', function () {
    $('#image').click(traitement);
});
$('#desactiver').on('click', function () {
    $('#image').off('click', traitement);
});

// ---------------------------------------
$('img').click(function(event,texte) {
    if(texte == undefined) {
        texte = "par vous";
        $('#message').text('L\'image a été cliqué ' + texte).fadeIn(1000).fadeOut(1000);
    }
});
$('#btn').click(function () {
    $('img').trigger('click', 'par jQuery')
});

// ------------------------------------------
$('#bonjour').on('bonjour_jquery', function(event, param) {
    alert(param + ', jQuery vous dit bonjour !');
});
$('#bonjour').click(function () {
    $('#bonjour').trigger('bonjour_jquery', 'Rémi');
});

//--------------------------------------------
$('#master').on('click', 'div', function () {
    $(this).after('<div>Ce &ltdiv&gt a les mêmes caractéristiques que son parent</div>');
});