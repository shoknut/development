//Déclaration de la constante
const TAUX_DE_TVA = 20.0;

//Déclaration des 3 variables
var montantHTAvantRemise;
var montantTVA;
var montantTTC;
var remise = 20;
var montantHT;

// Saisi d'un montant HT par l'utilisateur
montantHTAvantRemise = window.prompt("Veuillez saisir un montant HT :");

//Conversion du nombre type string en number 
montantHTAvantRemise = parseFloat(montantHTAvantRemise);

//Opérations arithmétiques
montantHT = montantHTAvantRemise - (montantHTAvantRemise*remise/100);
montantTVA = montantHT * TAUX_DE_TVA / 100;
montantTTC = montantHT + montantTVA; 

//Calcul de la remise
remise = window.prompt("Souhaitez-vous appliquer la remise de 20% ?")

document.write("<p>"+"Le montant HT avant remise est de " + montantHTAvantRemise + "€" + " </p>");

if (remise == "oui" || remise == "yes") {
	document.write("<p>" + "Remise appliquée de 20%" + "</p>");
	document.write("<p>" + "Le montant HT après remise est de " + montantHT + "€" + "</p>");
}
else {
	document.write("Aucune remise n'a été appliquée");
}



//Affichage du résultat
document.write("<p>"+"Le montant de la TVA est de " + montantTVA + "€" + "</p> ");
document.write("<p>"+"Le montant TTC est de " + montantTTC + "€" + "</p>");