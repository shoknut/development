'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* **************************************** DONNEES JEU **************************************** */
/*************************************************************************************************/

var dragon = 125;
var chevalier = 150;
var choiceArme;
var choiceArmure;
var armure = ["bronze", "argent", "or"];
var arme = ["épée", "hache", "arc"];
var diff = ["facile", "normal", "difficile"];
var round = 0;
var degatChevalier = 10;
var degatDragon = 10;



/*************************************************************************************************/
/* *************************************** FONCTIONS JEU *************************************** */
/*************************************************************************************************/

function combat() {
	var vitesseDragon = Math.random();
	var vitesseChevalier = Math.random();

	if (vitesseDragon < vitesseChevalier) {
		dragon = dragon - degatChevalier;
		console.log("Bravo, le dragon perd 10 pv. Il lui reste : " + dragon + " pv");
	}
	else if (vitesseDragon > vitesseChevalier) {
		chevalier = chevalier - degatDragon;
		console.log("Dommage, vous perdez 10 pv. Il vous reste : " + chevalier + " pv");
	}
	else {
		console.log("Egalité");
	}
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

diff = parseInt(prompt("Choisissez votre niveau de difficulté : 1.facile, 2.normal ou 3.difficile"));
if (diff == 1){
	diff = "facile";
	degatChevalier = degatChevalier*0.75;
	degatDragon = degatDragon*1.25;
	
}
else if (diff == 2) {
	diff = "normal";
	degatChevalier = degatChevalier*1;
	degatDragon = degatDragon*1;
	
}
else {
	diff = "difficile";
	degatChevalier = degatChevalier*1.25;
	degatDragon = degatDragon*0.75;
	
}
console.log("difficulté choisie : " + diff);


choiceArmure = Math.floor(Math.random()*Math.floor(3));
choiceArme = Math.floor(Math.random()*Math.floor(3));

if (choiceArmure == 0) {
	choiceArmure = "bronze";
	degatDragon = degatDragon*(-0.75);
}

if (choiceArmure == 1) {
	choiceArmure = "argent";
	degatDragon = degatDragon*(-1);
}

if (choiceArmure == 2) {
	choiceArmure = "or";
	degatDragon = degatDragon*(-1.25);
}

console.log("Armure assignée : " + choiceArmure);

if (choiceArme == 0) {
	choiceArme = "épée";
	degatChevalier = degatChevalier*0.75;
	
}

if (choiceArme == 1) {
	choiceArme = "hache";
	degatChevalier = degatChevalier*1.25;
	
}

if (choiceArme == 2) {
	choiceArme = "arc";
	degatChevalier = degatChevalier*1;
	
}

console.log("Arme assignée : " + choiceArme);


do {
	combat();
	round++;
	console.log("round " + round);
}
while (dragon > 0 && chevalier > 0);

if (dragon > 0) {
	document.write("<img src='dragon.jpg'>" + " <h1> GAME OVER ! </h1>");
}
else {
	document.write("<img src='knight.jpg'>" + " <h1> WINNER ! </h1>");
}

