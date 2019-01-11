'use strict';

var user;
var ordi;


user = window.prompt("Choisir entre pierre, feuille, ciseau");
user = user.toLowerCase();
ordi = Math.floor(Math.random()*Math.floor(3));


if (ordi == 0) {
	ordi = "pierre";
}

if (ordi == 1) {
	ordi = "feuille";
}

if (ordi == 2) {
	ordi = "ciseau";
}


switch(ordi) {
	case "pierre":
	{	
		if (user == "pierre") {
			document.write("Egalité");
		}
		if (user == "feuille") {
			document.write("Gagné");
		}
		if (user == "ciseau") {
			document.write("Perdu");
		}
	}
		

	break;
	case "feuille":
	{
		if (user == "feuille") {
			document.write("Egalité");
		}
		if (user == "papier") {
			document.write("Gagné");
		}
		if (user == "ciseau") {
			document.write("Perdu");
		}
	}
	break;
	case "ciseau":
	{	
		if (user == "ciseau") {
			document.write("Egalité");
		}
		if (user == "pierre") {
			document.write("Gagné");
		}
		if (user == "feuille") {
			document.write("Perdu");
		}
	}
		
	break;
	default:
	break;
}


	document.write("<p>" + "Vous avez choisi " + user + "</p>");
	document.write("<p>" + "L\'ordinateur a choisi " + ordi + "</p>");





