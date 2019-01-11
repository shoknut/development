'use strict';

var courses = [];

function AddProduit(product) {
	
	courses.push(product);
}

function RemoveProduit(product) {
	var pos = courses.indexOf(product); //2
	if (pos != -1){
		courses.splice(pos, 1);	
	}else{
		document.write("<p style='text-transform:uppercase;color:red;'>Le produit que vous avez saisi n'est pas dans la liste</p>" + "</br>");
	}
	
}

function RemoveAll(){
	courses.splice(0, courses.length);	
}



function Display(){
	document.write("Le panier de courses contient : " + courses + " </br>");
}



AddProduit(prompt("ajouter un produit"));
AddProduit(prompt("ajouter un produit"));
AddProduit(prompt("ajouter un produit"));
Display();

RemoveProduit(prompt("supprimer un produit"));
Display();


RemoveAll();
Display();

