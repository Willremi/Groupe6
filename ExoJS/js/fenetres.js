var winsize = "width=300, height=400, menubar=no, scrollbars=no";

function openPopup() {
    winPopup = window.open('popup.html',"wPopup", winsize);
    winPopup.focus();
}

function closePopup() {
    // Test si popup existe
    if (winPopup) {
        // Test si popup encore ouvert
        if (!winPopup.closed) {
            winPopup.close();
        }
    }
}

// function closeAuto() {
//     winPopup.close();
// }
// setTimeout("closeAuto()", 5000);

function message(text) {
    if(window.opener) {
        if(window.opener.document.form1) {
            window.opener.document.form1.choix.value=text;
        }
    } else {
        alert("la fenêtre principale n'est plus active.");
    }
}