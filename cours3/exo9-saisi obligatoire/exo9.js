// var saisi = false;

// do {
// 	var number = parseFloat(window.prompt("Saisissez un nombre svp"));
// 	if (isNaN(number)==true) {
// 		saisi=false;
// 	}
// 	else {
// 		saisi=true;
// 	}
// }
// while (saisi==false); 

do {
	var number = parseFloat(window.prompt("Saisissez un nombre svp"));
}
while (isNaN(number)); 

document.write("<p>" + "Vous avez saisi le nombre :" + "<strong>" + number + "</strong>");