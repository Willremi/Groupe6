var btnStart = document.getElementById("btnStart"); //BOUTON START
var btnPause = document.getElementById("btnPause"); //BOUTON PAUSE
var btnGo = document.getElementById("btnGo"); // BOUTON REPRENDRE
var btnStop = document.getElementById("btnStop"); //BOUTON STOP
var chrono = document.getElementById("chrono"); //SPAN CHRONO
var secondes = 0; //NOMBRES DE SECONDES DANS LE CHRONO
var timer; //INIT DE L'ID TIMER

/**
 * ENREGISTREMENT DES EVENTS
 */
btnStart.addEventListener("click", startTimer, false );
btnPause.addEventListener("click", pauseTimer, false);
btnGo.addEventListener("click", go, false);
btnStop.addEventListener("click", stop, false);

/**
 * FONCTIONS
 */

/**
 * DEMARE LE CHRONO
 */
function startTimer() {
        btnPause.classList.remove("hidden");
        btnStop.classList.remove("hidden");
        btnStart.classList.add("hidden");
        chrono.classList.add("start");
        chrono.classList.remove("reset")
        var startTime = new Date();
        watch(startTime, secondes);

}

/**
 * MET EN PAUSE LE CHRONO
 */
function pauseTimer() {
    btnPause.classList.add('hidden');
    btnGo.classList.remove("hidden");
    chrono.classList.remove("start");
    chrono.classList.add("pause");
    clearInterval(timer);
}

/**
 * REPREND LE CHRONO APRES UNE PAUSE
 */
function go() {
    btnGo.classList.add("hidden");
    btnPause.classList.remove("hidden");
    chrono.classList.add("start");
    chrono.classList.remove("pause");
    var startTime = new Date();
    watch(startTime, secondes);

}

/**
 * ARRETE LE CHRONO ET REMET A 0 LES COMPTEURS
 */
function stop() {
    clearInterval(timer);
    btnGo.classList.add("hidden");
    btnPause.classList.add("hidden");
    btnStop.classList.add("hidden");
    btnStart.classList.remove("hidden");
    secondes = 0;
    chrono.classList.remove("start", "pause");
    chrono.classList.add("reset");
    afficherTimer();
}

/**
 * AFFICHAGE PAR DEFAUT DU TIMER
 */
function afficherTimer(){
    chrono.innerHTML = "00:00:00";
}

/**
 * CALCUL & AFFICHAGE DU TIMER
 * @param date (la date du lancement de l'action)
 * @param delay (le nombre de secondes enregistré avant l'action timer) (SI 1er lancement = 0)
 */
function watch(date, delay) {
    timer = setInterval(function () {
        var seconds = parseInt((new Date().getTime() - date.getTime())/1000) + delay;
        var hours = parseInt(seconds / 3600);
        seconds = seconds % 3600;
        var minutes = parseInt(seconds / 60);
        seconds = seconds % 60;
        chrono.innerHTML= afficherUnZero(hours) + ":" + afficherUnZero(minutes) + ":" + afficherUnZero(seconds);
        secondes++;
    }, 1000);
}

/**
 * Ajoute un 0 devant le time SSI < 10
 * @param time
 * @returns string
 */
function afficherUnZero(time) {
        if (time <= 9 ){
            return "0"+time;
        }else{
            return time;
        }
}

//affichage du compteur au chargement de la page
afficherTimer();