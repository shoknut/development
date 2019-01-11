'use strict';

//Déclaration des variables
var number1;
var number2;
var operateur;
var result;

//Saisi des données
number1 = parseFloat(window.prompt('Saississez un premier chiffre'));
operateur = window.prompt('Saississez l\'opérateur : +, -, *, / ou ^');
number2 = parseFloat(window.prompt('Saississez un deuxième chiffre'));


switch (operateur) {
	case "+" :
	case "plus":
		result = number1+number2;
	break;
	case "-" :
	case "moins":
		result = number1-number2;
	break;
	case "*" :
	case "multiplier":
		result = number1*number2;
	break;
	case "/" :
	case "diviser":
		if (number2 == 0) {
			result = number1/number2;
		}
		else {
			document.write("<p>" + "La division par 0 n\'existe pas" + "</p>");

		}
	break;
	case "^" :
	case "puissance":
		result = Math.pow(number1,number2);
	break;
	default:
	document.write("Opération mathématique inconnue");
	break;
}

document.write(result);








