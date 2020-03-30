var afficheDate = document.getElementById('afficheDate');
var btnDate = document.getElementById('btnDate');

console.log(new Date().getHours());

btnDate.addEventListener("click", function () {
    afficheDate.value = new Date().getDate();
}, false);

var afficheHeure = document.getElementById('afficheHeure');
var btnHours = document.getElementById('btnHours');

btnHours.addEventListener("click", function () {
    afficheHeure.value = new Date().getHours();
}, false);