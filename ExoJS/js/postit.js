// var para = document.querySelector('p');
// var postit = document.querySelector('#postIt');
// var displayOn = document.querySelector('#displayOn');
// var displayOff = document.querySelector('#displayOff');

// para.addEventListener('mouseover', function(){
    
//     postit.style.visibility = 'visible';
//     postit.innerHTML = 'C\'est gentil de me survoler ...';
// });

// para.addEventListener('mouseout', function () {
//     postit.style.visibility = 'hidden';
// })

// displayOn.addEventListener('click', function () {
//     postit.style.visibility = 'visible';
//     postit.innerHTML = 'Vous avez cliqué sur le bouton \'Affiche\'';
// });
// displayOff.addEventListener('click', function () {
//     postit.style.visibility = 'hidden';
    
// });

var postit = $('#postIt');

$('p').mouseover(function() {
    postit.css('visibility', 'visible');
    postit.html('C\'est gentil de me survoler ...');
});

$('p').mouseout(function () {
    postit.css('visibility', 'hidden');
});

$('#displayOn').on("click", function () {
    postit.css('visibility', 'visible');
    postit.html('Vous avez cliqué sur le bouton \'Affiche\'');
});
$('#displayOff').on("click", function () {
    postit.css('visibility', 'hidden');
});