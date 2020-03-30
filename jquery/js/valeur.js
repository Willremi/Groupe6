var posparent = $('#parent').offset();
var posenfant = $('#enfant').offset();
posenfant.top = 100;
posenfant.left = 100;
$('#enfant').offset(posenfant);
$('span').text('Parent x = ' + posparent.left + ', y = ' + posparent.top + ' Enfant : x = ' + posenfant.left + ', y = ' + posenfant.top);