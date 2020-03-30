function verifform(chaine) {
    if (chaine.length < 2) {
        alert('La chaîne doit comporter au moins de 2 caractères');
        return false; // interromptre le submit du formulaire
    } else {
        alert('Vous avez saisi : "' + chaine + '"');
        return true;
    }
}

// Variante 1 DOM0
var verifform2 = function () {
    // var txt = document.getElementById("txt").value;
    // if (txt.length < 2) {
    //     alert('La chaîne doit comporter au moins de 2 caractères');
        
    // } else {
    //     alert('Vous avez saisi : "' + txt + '"');
    //     document.getElementById('formSaisie').submit();
    // }
    var txt = $('#txt').val();
    if(txt.length < 2) {
        alert('La chaîne doit comporter au moins de 2 caractères');
    } else {
        alert('Vous avez saisi : "' + txt + '"');
        $('#formSaisie').submit();
    }
};

// var btnDOM0 = document.getElementById('btnDom0');
// btnDOM0.onclick = verifform2;
$('#btnDom0').click(verifform2);


// Variante 2 DOM2
// var btnDOM2 = document.getElementById('btnDom2');
// btnDOM2.addEventListener("click", verifform2,false);
$('#btnDom2').on("click", verifform2);