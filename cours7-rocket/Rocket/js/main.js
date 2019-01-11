'use strict';

/***********************************************************************************/
/* *********************************** DONNEES *************************************/
/***********************************************************************************/
var firingButton;
var chrono = 10;
var time;
var span;
var rocket;
var tookoff;
var cancel;
var refresh;
var isMoving = false;


/***********************************************************************************/
/* ********************************** FONCTIONS ************************************/
/***********************************************************************************/
function OnClickStart() {
	isMoving = true;
	firingButton.removeEventListener('click', OnClickStart);
	time = setInterval(Countdown, 1000);
	rocket.src = "images/rocket2.gif";
}

function Countdown(){
	if (chrono >= 0) {
		span = document.querySelector('#billboard span');
		span.textContent = chrono;
		chrono--;
	}
	else {
		clearInterval(time);
		RocketTookOff();
		rocket.classList.toggle("tookOff");
	}

}

function RocketTookOff() {
	rocket.src = "images/rocket3.gif";

}

function OnClickCancel() {
	isMoving = false;
	clearInterval(time);
	firingButton.addEventListener('click', OnClickStart);
	
	
}

function OnClickRefresh() {
	isMoving = false;
	chrono = 10;
	span.textContent = chrono;
	firingButton.addEventListener('click', OnClickStart);
	if (rocket.classList.contains("tookOff") == true) {
		rocket.classList.toggle("tookOff");
	}
	
}

function keyBoardSpace(event) {
	if (event.keyCode == 32) {
        if(isMoving == false) {
            OnClickStart();
            isMoving = true;
        } 
        else if (isMoving == true) {
        	isMoving = false;
            OnClickCancel();
        }
        
    } 
	
}





/************************************************************************************/
/* ******************************** CODE PRINCIPAL **********************************/
/************************************************************************************/
firingButton = document.querySelector('#firingButton');
rocket = document.querySelector("#rocket");
cancel = document.querySelector('#cancel');
refresh = document.querySelector('#reload');

firingButton.addEventListener('click', OnClickStart);
refresh.addEventListener('click', OnClickRefresh);
cancel.addEventListener('click', OnClickCancel);
document.addEventListener('keyup', keyBoardSpace);


