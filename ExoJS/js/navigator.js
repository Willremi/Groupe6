var codeName = document.getElementById('afficheCode');
var btnCode = document.getElementById('codeName');

btnCode.addEventListener("click", function code() {
   codeName.value = navigator.appCodeName;
},false);

var appName = document.getElementById('AppName');
var btnName = document.getElementById('btnName');

btnName.addEventListener("click", function appname() {
    appName.value = navigator.appName;
 },false);

var versionApp = document.getElementById('appVersion');
var btnVersion = document.getElementById('btnVersion');

btnVersion.addEventListener("click", function versionapp () {
    versionApp.value = navigator.appVersion;
}, false);

var useragent = document.getElementById('userAgent');
var btnagent = document.getElementById('btnAgent');

btnagent.addEventListener("click", function agentuser () {
    useragent.value = navigator.userAgent;
}, false);

