'use strict';

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/

var allPhoto = document.querySelectorAll("#photo-list img");
var counted = document.querySelector("#total em");

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
function OnMouseOverPhoto(){
	this.classList.add('hover');
	

}

function OnClickPhoto(){
	this.classList.toggle('selected');
	var select = document.querySelectorAll('.selected');
	counted.innerHTML = select.length;
}

function OnMouseLeavePhoto() {
	this.classList.remove('hover');
}



/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
 for (var i=0; i<allPhoto.length; i++) {
 	allPhoto[i].addEventListener("click", OnClickPhoto);
 	allPhoto[i].addEventListener("mouseover", OnMouseOverPhoto);
 	allPhoto[i].addEventListener("mouseleave", OnMouseLeavePhoto);
}

// correction
// var allPhotos = document.querySelectorAll(".photo-list li");
// var total = document.querySelector("#total em");

// function OnclickPhoto(){
// querySelectorAll retourne tout le temps un tableau
// sur un tableau, la propriété length indique la taille du tableau
// var selectedPhotos = document.querySelectorAll(".photo-list li.selected");
// total.textContent = selectedPhotos.length;
// }
