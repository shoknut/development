// Le but du jeu est de trouver un nombre entre 0 et 100
// Générer un nombre aléatoire entre 0 et 100
// Prompt à l'utilisateur d'entrer un nombre
// Si le nombre entré est plus petit que le nombre aléatoire choisi, lui indiquer
// Si le nombre entré est plus grand que le nombre aléatoire choisi, lui indiquer
// L'utilisateur a le droit à 5 essais avant GAME OVER

var number = Math.floor(Math.random()*101);
var essais = 5;

do {
	var userNumber = window.prompt("Veuillez choisir un nombre entre 0 et 100. Il vous reste "+ essais + " essais");
	essais--;
	if (userNumber < number) {
		alert("C'est trop bas !");
	}
	else if (userNumber > number) {
		alert("C'est trop haut !");
	}
}
while (userNumber != number && essais > 0);

if (essais == 0) {
	document.write("<p>Vous n'avez plus d'essais, GAME OVER</p>");
	document.write("<p>Le nombre qu'il fallait trouver était : " + number + "</p>");
} 
else {
	document.write("Bingo ! C'est gagné !");
}