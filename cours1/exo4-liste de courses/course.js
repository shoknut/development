//Déclaration de la constante money
var money = 150;


//Déclaration de l'objet utilisateur
var utilisateur = new Object();
utilisateur.name = window.prompt("Veuillez saisir votre nom");

//Déclaration de l'objet article
var article = new Object();
article.nom = window.prompt("Veuillez saisir l'article que vous voulez acheter :");
article.price = 50.5;

var restant = money - article.price;

document.write("<p>" + "Information de M ou Mme" + " " + utilisateur.name +":");
document.write("<ul>")
document.write("<li>" + "Valeur initiale :" + " " + money + "€" + "</li>");
document.write("<li>" + article.nom + " " + ":" + " " + article.price + "€" + "</li>");
document.write("<li>" + "Monnaie restante :" + " " + restant + "€" + "</li>");



window.alert("<p>" + "ceci est un message");

