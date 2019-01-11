'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
var toolbarre;
var nav;
var imgNumber = 1;
var arrow;
var image;
var previous;
var play;
var pause;
var next;
var randomButton;
var figcaption;
var figcaptionList = ["Street Art", "Fast Lane", "Colorful Building", "Sky scrapers", "City by night", "Tour eiffel, la nuit"];
var isPlaying = false;
var chrono;



/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function OnClickButton() {
	nav.classList.toggle('hide');
	arrow.classList.toggle('reverse');
}

function RefreshSlider() {
	image.src = "images/" + imgNumber + ".jpg";
	figcaption.innerHTML = figcaptionList[imgNumber-1];
}

function OnClickNext() {
	if (imgNumber == 6) {
		imgNumber=1;
	}
	else {
		imgNumber++;
	}
	RefreshSlider();
}

function OnClickPrevious() {
	if (imgNumber == 1) {
		imgNumber=6;
	}
	else {
		imgNumber--;
	}
	RefreshSlider();
}

function OnClickPlay() {
	var iframe = document.querySelector("#slider-toggle i");
	iframe.classList.toggle("fa-play");
	iframe.classList.toggle("fa-pause");
	

	if(isPlaying == false) {
		chrono = setInterval(OnClickNext, 2000);
		isPlaying = true;
	}
	else {
		clearInterval(chrono);
		isPlaying = false;
	}

}



function OnClickRandom() {
	// notre variable aléatoire (chiffre)
	
	var random;
	do {
		random = Math.floor(Math.random() * (7 - 1) + 1);
		
	}	
	while (random == imgNumber);

	imgNumber = random;

	RefreshSlider();
	
}

document.addEventListener('keydown', function(e) {
	if(e.keyCode === 37){
        OnClickPrevious();
    }
    else if(e.keyCode === 39){
        OnClickNext();
    }
});




/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
toolbarre = document.getElementById('toolbar-toggle');
nav = document.querySelector(".toolbar");
arrow = document.querySelector(".fa-arrow-up");
image = document.getElementById("image");
play = document.getElementById("slider-toggle");
figcaption = document.querySelector(".figcaption");
next = document.querySelector("#slider-next");
previous = document.getElementById("slider-previous");
randomButton = document.getElementById("slider-random");
pause = document.getElementById("slider-toggle");

toolbarre.addEventListener('click', OnClickButton);
next.addEventListener('click', OnClickNext);
previous.addEventListener('click', OnClickPrevious);
play.addEventListener('click', OnClickPlay);
randomButton.addEventListener('click', OnClickRandom);

