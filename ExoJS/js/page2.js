url = decodeURI(location.href);

var getParams = function (url) {
	var params = {};
	var parser = document.createElement('a');
	parser.href = url;
	var query = parser.search.substring(1);
	var vars = query.split('&');
	for (var i = 0; i < vars.length; i++) {
		var pair = vars[i].split('=');
		params[pair[0]] = decodeURIComponent(pair[1]);
	}
	return params;
};

cle = getParams(url);
// console.log(cle);
// console.log(cle['cle1']);

var affiche = document.getElementById('affiche');
affiche.innerHTML = "Texte : " + cle['cle2'] + "<br>Nombre : " + cle['cle1'];

