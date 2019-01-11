'use strict';

// /////////////////////// DONNEES ////////////////////////////////////

var plus;
var supp;
var submit;
var edit;

//création d'un tableau pour mettre les contacts
var contactList = [];


/////////////////////// FUNCTIONS /////////////////////////////////////////////
function OnClickShowButton() {
	$("#contact-form").fadeIn();
}



function OnSubmitContact(){
		$("#contact-form").fadeOut();

	//création d'un new object pour contenir toutes les infos du contact
	var contactObject = new Object();
	contactObject.prenom = $("#firstName").val();
	contactObject.nom = $("#lastName").val();
	contactObject.phone = $("#phone").val();
	contactObject.civility = $("#civility").val();
	

	// CA CA AFFICHE JUSTE
	Affichage(contactObject);

	//on injecte dans le tableau les infos que l'on aura récupéré dans contactObject
	contactList.push(contactObject);

	// CA INJECTE LE TABLEAU DANS LE STORAGE
	localStorage.setItem("contact", JSON.stringify(contactList));

}

function Affichage(contact){
	var liContact = $('<li>');
	var aContact = $("<a>");
	aContact.attr("href","#");
	liContact.append(aContact);
	$('#contact').append(liContact);
	aContact.attr("data",position);
	aContact.text(contact.prenom + " " + contact.nom);
	aContact.on("click", DetailContact);
}

function DeleteTab() {
	contactList = [];
	localStorage.setItem("contact", JSON.stringify(contactList));
	$("#contacts").empty();

}

function DetailContact(){

	$("#description").empty();
	var positionContact = $(this).attr("data");
	var contact = contactList[positionContact];
	
	// a foutre dans la description
	var firstName = $("<p>").text(contact.prenom);
	var lastName = $("<p>").text(contact.nom);
	var phone = $("<p>").text(contact.phone);
	var civility = $("<p>").text(contact.civility);

	$("#description").append(civility);
	$("#description").append(firstName);
	$("#description").append(lastName);
	$("#description").append(phone);
	
	var editContact = $("<a>").text("Editer ce contact");
	editContact.attr("href","#");
	$("#description").append(editContact);

	
}

// function _render() {
//     var input = ("<input>");
//     $("#description").append(input);
//     var length = contactList.length;
//     for (var i = 0; i < length; i++) {
//       form.text('<input class="edit" type="text" value="' + contactList[i].firstName + '" ><input class="edit" type="text" value="' + contactList[i].lastName + '" ><input type="text" class="edit" value="' + contactList[i].phone + '" >');
//     }
//   }

function OnClickEditContact() {

	var edition = JSON.parse(localStorage.getItem("contact"));
	var positionContact = $(this).data("positionContact");
	var contact = edition[positionContact];
	
	var editContact = $("<a>");
	editContact.on("click", OnClickEditContact);

	
	var lastName = $(".edit").val(edition.nom);
	var firstName = $(".edit").val(edition.prenom);
	var phone = $(".edit").val(edition.phone);

	// _render();	

	$("#description").data('mode','edit').show();
	console.log(edition);
	
}


/////////////////////// CODE PRINCIPAL //////////////////////////////////
plus = $("#plus");
supp = $("#supp");

submit = $("#save");
edit = $("#edit");

contactList = JSON.parse(localStorage.getItem("contact"));

// si le storage est vide
if (contactList == null){
	// recrée un tableau vide
	contactList = [];
}

var position = 0;
 for (var contact of contactList){
 	Affichage(contact);
 	position++;
 }



plus.on('click',OnClickShowButton);
submit.on("click", OnSubmitContact);
supp.on("click",DeleteTab);



// var h1 = $("<h1>");
// $("#description").append(h1);
// h1.text("Bonjour à tous !!"); 
// h1.attr("class","color");