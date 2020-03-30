var attent = document.getElementById('attent');
var btnClose = document.getElementById('fermer');
var btnDeplacer = document.getElementById('deplacer');
var btnReduire = document.getElementById('reduire');
var winSize = 'width=500, height=500';


attent.addEventListener('click', openWindow);
btnReduire.addEventListener('click', resizeWindowTo);
btnDeplacer.addEventListener('click', moveWindowBy);
btnClose.addEventListener('click', closeWindow);


function openWindow(){
    //On recupère l'information renvoyée par open() dans une variable "fenetre"
    fenetre = window.open('overtureMini.html', '', winSize);
}

function closeWindow(){
    fenetre.close();
}

function moveWindowBy(){
    fenetre.moveBy(100, 300);//Déplace la fenêtre 100px à droite et 100px en bas
}

function resizeWindowTo(){
    fenetre.resizeTo(60, 72);
}

function fermerFille () {
    self.close();
}


