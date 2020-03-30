var quantite = document.getElementById('quantite');
var prix = document.getElementById('prix');
var prixProduit = document.getElementById('prixProduit');
var quantite1 = document.getElementById('quantite1');
var prix1 = document.getElementById('prix1');
var prixProduit1 = document.getElementById('prixProduit1');
var prixtotal = document.getElementById('prixtotal');
btnValider = document.getElementById('valider');

btnValider.addEventListener("click", function () {
    
    
    prixProduit.value = quantite.value * prix.value;
    prixProduit.innerHTML = prixProduit.value;
    prixProduit1.value = quantite1.value * prix1.value;
    prixProduit1.innerHTML = prixProduit1.value;

    prixtotal.value = parseFloat(prixProduit.value) + parseFloat(prixProduit1.value);
    prixtotal.innerHTML = prixtotal.value;
    
});