'use strict';

/*************************************************************************************************/
/* **************************************** DONNEES CLICK **************************************** */
/*************************************************************************************************/

var rectangle = document.querySelector(".rectangle");
var button = document.querySelector("#toggle-rectangle");
console.log(rectangle);

/*************************************************************************************************/
/* *************************************** FONCTIONS CLICK *************************************** */
/*************************************************************************************************/

// cette fonction est appelée lorsque l'on clique sur le bouton, grâce à l'écoute d'événement click sur le bouton
function OnClickButton() {
	rectangle.classList.toggle("hide");
}

function OnDblClickRectangle() {
	rectangle.classList.toggle("rectangleGood");
}

function MouseEnter() {
	rectangle.classList.add("rectangleImportant");
	
}

function MouseLeave(){
	rectangle.classList.remove("rectangleImportant");
	rectangle.classList.remove("rectangleGood");
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

button.addEventListener("click", OnClickButton);
rectangle.addEventListener("mouseover", MouseEnter);
rectangle.addEventListener("mouseleave", MouseLeave);
rectangle.addEventListener("dblclick", OnDblClickRectangle);