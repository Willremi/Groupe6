$('h2').append(' ***');
$('h2').prepend('*** ');
$('#trois').before('<hr>');
$('hr').after('<br><br>');

$('h2').each(function () {
    var elemH2 = $(this);
    elemH2.replaceWith('<h3>' + elemH2.text() + '</h3>');
});

$('<li>Deuxième élément bis</li>').insertAfter($('li:nth-child(2)'));
$('<hr>').prependTo($('h3'));