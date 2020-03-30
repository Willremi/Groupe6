$('fieldset').focusin(function () {
    $('#resultat').text($(this).attr('id'));
});
$('fieldset').focusout(function () {
    $('#resultat2').text($(this).attr('id'));
});

// ------------------------------------------
$('select').change(function() {
    $('#resultat3').text('Vous venez de sélectionner "' + $(this).val() + '".');
});