var verifform = function () {
    // var email = document.getElementById('txt').value;
    // if(email == "") {
    //     alert('Veuillez mettre votre email !');
    //     return false;
    // } else 
    // if (/^[a-z0-9._-]+@{1}[a-z0-9-]+\.[a-z]{2,3}$/.test(email)) {
    //     alert("Votre adresse mail est bien valide");
    //     document.getElementById('formSaisie').submit();
    // } else {
    //     alert ("Votre adresse mail n'est pas valide");
    // }
    var email = $('#txt').val();
    if (email == "") {
        alert('Veuillez mettre votre email !');
        return false;
    } else if (/^[a-z0-9._-]+@{1}[a-z0-9-]+\.[a-z]{2,3}$/.test(email)){
        alert("Votre adresse mail est bien valide");
        $('#formSaisie').submit();
    } else {
        alert ("Votre adresse mail n'est pas valide");
    }
}

// var btnDOM = document.getElementById('btnDom');
// btnDOM.addEventListener("click",verifform,false);
$('#btnDom').on('click', verifform);