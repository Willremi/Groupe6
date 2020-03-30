// Dissimulation des réponses
$('.reponse').hide();

var q = $('.question'); // Mémo du sélecteur dans une variable pour optimiser le code
q.css({
    background: '#9EEAE0', 
    'border-style': 'groove', 
    'border-width': '4px', 
    width: '900px', 
    height: '250px', 
    margin: '20px'
});

$('.texte').css({
    float: 'left', 
    width: '90%'
});

$('img').css({
    float: 'right', 
    'margin-top': '80px'
});

$('a').hover(
    function() {
        $('.reponse').show();
        if($(':radio[id="r1"]:checked').val()) {
            $('#img1').attr('src', '../img/vrai.png');
            $('#reponse1').css('color', 'green');
        } else {
            $('#img1').attr('src', '../img/faux.png');
            $('#reponse1').css('color', 'red');
        }

        if($(':radio[id="r4"]:checked').val()) {
            $('#img2').attr('src', '../img/vrai.png');
            $('#reponse2').css('color', 'green');
        } else {
            $('#img2').attr('src', '../img/faux.png');
            $('#reponse2').css('color', 'red');
        }

        if($(':radio[id="r8"]:checked').val()) {
            $('#img3').attr('src', '../img/vrai.png');
            $('#reponse3').css('color', 'green');
        } else {
            $('#img3').attr('src', '../img/faux.png');
            $('#reponse3').css('color', 'red');
        }
    }, 
    function () {
        $('.reponse').hide();
        $('#img1').attr('src', '../img/question.png');
        $('#img2').attr('src', '../img/question.png');
        $('#img3').attr('src', '../img/question.png');
    }
);