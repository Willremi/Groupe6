// Dimensions de la fenêtre
var largeur = ($(window).width()) - 50;
var hauteur = ($(window).height()) - 50;

// Affichage de la première image (100, 100)
var p = $('#target').offset();
p.top = 100;
p.left = 100;
$('#target').offset(p);

// Gestion du clic et déplacement de l'image
$('#target').mouseenter(function () {
    x = Math.floor(Math.random()*largeur);
    y = Math.floor(Math.random()*hauteur);
    var p = $('#target').offset();
    p.top = y;
    p.left = x;
    $('#target').offset(p);
});

$('div').scroll(function () {
    alert('Utilisation de la roulette dans la balise <div>');
});
$(window).scroll(function () {
    alert('Utilisation de la roulette dans le document');
});
// --------------------------------
$('#target1').mousedown(function (e) {
    $('#rapport').html('Evénement : ' + e.type + '. Bouton pressé : ' + e.which);
});

// --------------------------------
$('#target2').keydown(function() {
    $('#lumiere').css('background-color', 'green');
});
$('#target2').keyup(function() {
    $('#lumiere').css('background-color', 'white');
});

// --------------------------------
$('#saisie').keypress(function (e) {
    $('#unelettre').text(e.which); //keyCode
});