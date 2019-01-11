<?php
// déclaration du tableau qui va contenir tous les chiffres aléatoires
$loteryArray = [];
$i = 0;

// ici, démarrer une boucle de 6 iterations, 1 chiffre aléatoire par iteration

// toujours dans la boucle, push le nombre aléatoire dans le lotteryArray
while (count($loteryArray) < 6) {
	$random = rand(1,49);

	if (in_array($random,$loteryArray)==true) {
		continue;
	}
	else{
		array_push($loteryArray,$random);
	}
	$i++;
	
	
}
// boucle se termine

// ranger dans l'ordre croissant le lotteryArray
sort($loteryArray);

// avant d'inclure, tester tout ce que vous voulez grace à echo
include "loterie.html";

// include de la page html pour lire le contenu du lotteryArray;

?>