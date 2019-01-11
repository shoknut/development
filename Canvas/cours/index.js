// récupération de la balise canvas
var canvas = document.getElementById("canvas");

//récupération du "contexte" du canvas
//espace de dessin
var ctx = canvas.getContext("2d");

////////////////////////// DESSIN DU CARRE /////////////////////////////

//couleur
ctx.fillStyle = "cyan";

//fonction de "contexte" qui va nous permettre de dessiner un rectangle
//x de départ, y de départ, largeur, hauteur
ctx.fillRect(10,10,50,50);

//effacer un bout du rectangle == inverse de fillRect()
//retire une forme et a des coordonnées précises
ctx.clearRect(10,10,25,25);


////////////////////////// DESSIN DE L'ARC DE CERCLE /////////////////////////////

//je passe mon tracé a une taille pt5
ctx.lineWidth = 5;

//démarre le tracé obligatoire
ctx.beginPath();
//écriture de l'arc (cercle) : arc( x, y, radius, startAngle, endAngle, sensAntiHoraire )
ctx.arc(100,100,30,0,Math.PI*2,true);
//couleur du tracé
ctx.strokeStyle = "coral";
//oblligatoire, fonction de confirmation du tracé du cercle
//cette ligne fait APPARAITRE le tracé
ctx.stroke();