// var test = $('a').attr('href');
// document.write(test);
$('#julia').addClass('vert grand');
$('#eric').removeClass('vert').addClass('rouge');
$('#paul').removeClass('vert').addClass('rouge').removeClass('grand').addClass('petit');
$('#jean').removeClass('rouge grand').addClass('vert petit');

// if($('#jean').hasClass('rouge')) {
//     alert('le span #jean est de classe rouge');
// } else {
//     alert('le span #jean n\'est pas de classe rouge')
// }
// if($('#julia').is('.vert.grand')) {
//     alert('le span #julia est de classe grand et vert');
// } else {
//     alert('le span #julia n\'est pas de classe grand et/ou vert')
// }
$('p').text(function(index, actuel) {
    alert('Paragraphe ' + (index + 1) + ' : ' + actuel);
});