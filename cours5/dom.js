'use strict'; 

// récupérer la div rectangle via js :

var rectangle = document.querySelector(".rectangle");
var carre = document.querySelector("#carre");
// ces 2 lignes font la meme chose
// var carre = document.getElementById('carre');

console.log(rectangle);

// écouter un clic depuis la souris de l'utilisateur

rectangle.addEventListener("click", OnClickRectangle);
carre.addEventListener("click", OnClickCarre);

function OnClickRectangle() {
	rectangle.classList.add("rectangleModified");
	rectangle.classList.remove("rectangle");
}

function OnClickCarre() {
	// toggle veut dire interrupteur
	carre.classList.toggle("hide");
}

