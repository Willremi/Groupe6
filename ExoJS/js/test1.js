function afficheValeur() { 
    var elt = document.getElementsByName('choix'); 
    var inputTxt = document.getElementById('txt');
    for(i = 0; i < elt.length; i++) { 
        if(elt[i].checked) 
        inputTxt.value = elt[i].value; 
    } 
} 

// Fonction autoExécutable
(function () {
    document.getElementById('myBtn').addEventListener("click", afficheValeur, false);
}());