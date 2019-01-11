'use strict';

var button = $("#button");

var show = true;

button.on("click", OnClickShowButton);

$("#submit").on("click", OnSubmitContact);

function OnSubmitContact(){
	//recupérer les inputs
	//.val() récupère le texte de la balise et non pas la balise elle meme
	var firstName = $("input[name=firstName]").val();
	// var firstName = $("#firstName").val(); equivalent
	var lastName = $("input[name=lastName]").val();

	//création de la balise h1
	var h1Contact = $("<h1>");
	var sectionContact = $("#contacts");

	//accrochage de la balise h1 précédemment créé à la section #contacts
	sectionContact.append(h1Contact);

	//injection du texte à l'intérieur du h1
	h1Contact.text(firstName + " " + lastName);

	//je fais appel au localStorage (bdd  local du navigateur)
	//j'enregistre un nom "contact" et en valeur je lui donne la concaténation de firstName	
	localStorage.setItem("contact", firstName + " " + lastName);
}

function OnClickShowButton() {
	if (show==true){
		$(".rectangle").fadeOut();
		show=false;
	}
	else{
		$(".rectangle").fadeIn();
		show=true;
	}
	
}


//je récupère le contenu contact du localStorage
//ça me renvoie mon prénom et mon nom
var contactStored = localStorage.getItem("contact");

//je créé une balise h1 pour l'afficher
var h1Contact = $("<h1>");

//je récup la section des contacts dans le html
var sectionContact = $("#contacts");

//accrochage de la balise h1 précédemment créée à la section #contacts
sectionContact.append(h1Contact);

//on écrit dans le h1 le contenu de la variable contactStored
h1Contact.text(contactStored);