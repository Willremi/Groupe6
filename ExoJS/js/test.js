var nomExterne = "Hein";

function portee (nom) {
    prenom = "Terieur ";
    nomGlobale = "Halle ";
    console.log(window.nomGlobale + nom + prenom);
    console.log(nomGlobale + nomExterne + prenom);
}

portee("Ex ");
console.log(prenom);

// -------------------------
function perimetre () {
    var result = 0;
    var forme = "";
    switch(arguments.length) {
        case 0 : 
            return "Espèce d'abruti, il faut des arguments";
            break;
        case 1 :
            forme = "carré";
            result = 4 * arguments[0];
            break;
        case 2 :
            forme = "rectangle";
            result = 2 * (arguments[0] + arguments[1]);
            break;
        case 3 : 
            forme = "triangle";
            result = arguments[0] + arguments[1] + arguments[2];
            break;
        default : 
            forme = "polygone";
            for (i in arguments) {
                result += arguments[i];
            }
    }
    return "Le périmètre est de " + result + ", votre figure est un " + forme;
}

console.log(perimetre());
console.log(perimetre(5));
console.log(perimetre(3, 8));
console.log(perimetre(1, 2, 3));
console.log(perimetre(10, 50, 30, 20, 2));
