var formsaisie = document.getElementById('formSaisie');
var cle1 = document.getElementById('Nb');
var cle2 = document.getElementById('txt');

var message = document.getElementById('message');

formsaisie.addEventListener('submit', function(e) {
    // message.innerHTML = cle1.value + ' et ' + cle2.value;
    var valeur1 = cle1.value;
    var valeur2 = cle2.value;
    var url = decodeURI("page2.html?cle1=" + valeur1 + "&cle2=" + valeur2);
    location.replace(url);
    
    
    e.preventDefault();
});