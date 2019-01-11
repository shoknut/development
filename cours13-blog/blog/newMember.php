<?php
include "bdd.php";	

	if (count($_POST)>0){
		
		if($_POST["password"] == $_POST["confpassword"]) {


		//Insertion du nouvel utilisateur
		$query = $pdo->prepare("INSERT INTO memberShip (nickname, email, password, creationTime)
			VALUES (?,?,?,NOW())");

	    $query->execute([$_POST["pseudo"],$_POST["mail"],password_hash($_POST["password"],PASSWORD_DEFAULT)]);

	    header("Location: homePage.php");
	    }
	    else{
	    	$erreur = "le mot de passe n'est pas identique à la confirmation "
	    }
	}
	
	include "newMember.phtml";

?>	