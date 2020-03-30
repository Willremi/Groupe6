// var ampouleOff = document.getElementById('ampouleOff');
var ampouleOff = $('#ampouleOff');
var ampouleOK = $('#ampouleOk')
// var ampouleOK = document.getElementById('ampouleOk');


function onOff () {
//    if (ampouleOff.style.display == "inline") {
//        ampouleOff.style.display = "none";
//        ampouleOK.style.display = "inline";
       
//    } else {
//        ampouleOff.style.display = "inline";
//        ampouleOK.style.display = "none";
//    }
   
    if (ampouleOff.css('display') == 'inline') {
        ampouleOff.css('display', 'none');
        ampouleOK.css('display', 'inline');
    } else {
        ampouleOff.css('display', 'inline');
        ampouleOK.css('display', 'none');
    }
}