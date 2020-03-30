var nom = document.getElementById('name');
var prenom = document.getElementById('firstname');
var numbermembre = document.getElementById('numberMember');
var adresse = document.getElementById('adress');
var ville = document.getElementById('town');
var codepost = document.getElementById('codePost');
var adressmail = document.getElementById('mailAdress');
var telnum = document.getElementById('telNumber');
var verifform = document.getElementById('formVerif');

function verif () {
    var valeurName = nom.value;
    var valeurFirstname = prenom.value; 
    var valeurNbmembre = numbermembre.value;
    var regNbmembre = /^[0-9]{8}$/;
    var valeurAdress = adresse.value;
    var valeurcodepost = codepost.value;
    var regCodepost = /^[0-9]{5}$/;
    var valeurmail = adressmail.value;
    var regMail = /^[a-z][a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,3}$/;
    var valeurTel = telnum.value;
    var regtel = /^[0-9]{10}$/;

    if(!valeurName) {
    alert("Veuillez mettre votre nom !!!");
    } else if (!valeurFirstname) {
    alert("Veuillez mettre votre prénom !");
    } else if (valeurNbmembre) {
        if (regNbmembre.test(valeurNbmembre) == false) {
            alert('Veuillez mettre 8 chiffres au numéro de membre');
        }
    } else if (!valeurAdress) {
        alert ("Veuillez mettre votre adresse");
    } else if (valeurcodepost) {
        if (regCodepost.test(valeurcodepost) == false) {
            alert('Veuillez mettre 5 chiffres au code postal');
        }
    } else if (valeurmail){
        if (regMail.test(valeurmail) == false) {
            alert("Votre adresse mail est mal écrite");
        }
    } else if (valeurTel) {
        if (regtel.test(valeurTel) == false) {
            alert("Votre numero de tel doit comporter 10 chiffres");
        }
    } else if (valeurName && valeurFirstname && valeurAdress){
        verifform.action = "controle2.html";
        
    }
    
}

