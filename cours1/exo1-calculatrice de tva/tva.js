//Déclaration de la constante
const TAUX_DE_TVA = 20.0;

//Déclaration des 3 variables
var montantHT;
var montantTVA;
var montantTTC;

// Saisi d'un montant HT par l'utilisateur
montantHT = window.prompt("Veuillez saisir un montant HT :");

//Conversion du nombre type string en number 
montantHT = parseFloat(montantHT);

//Opérations arithmétiques
montantTVA = montantHT * TAUX_DE_TVA / 100;
montantTTC = montantHT + montantTVA; 

//Affichage du résultat
document.write("<p>"+"Le montant HT est de " + montantHT + " </p>");
document.write("<p>"+"Le montant de la TVA est de " + montantTVA + "</p> ");
document.write("<p>"+"Le montant TTC est de " + montantTTC + "</p>");