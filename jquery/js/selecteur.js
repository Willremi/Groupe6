$('#resultat').html('Texte à écrire dans la balise span');

$('.rouge').fadeOut('slow', function() {
    $(this).fadeIn('slow');
});

$('.rouge').css({
    background : 'red', 
    color : 'yellow'
});

$('.bleu').css({
    background : 'blue',
    color : 'yellow'
});

$('li > ul').css('color', 'blue');

$('p:lt(3)').css('color', 'violet');

$('div').hide();

$(':header').css('color', 'green');
$('div:hidden').show();
$(':header:not(h1)').hide();