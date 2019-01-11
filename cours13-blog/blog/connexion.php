<?php

include "bdd.php";

if(count($_POST)>0){

	$query = $pdo->prepare("SELECT id,nickname, password, role
							FROM memberShip
							WHERE nickname = ?");

	$query -> execute([$_POST["pseudo"]]);

	$login = $query->fetch(PDO::FETCH_ASSOC);
	
	if($login){
		if (password_verify($_POST["password"], $login["password"])) {
				session_start();
				//$_SESSION représente le cookie
		        $_SESSION["user"] = $login["nickname"];
		        $_SESSION["role"] = $login["role"];
		        $_SESSION["id"] = $login["id"];
		        $_SESSION["logged"] = TRUE; 
		      
		        header("Location:homePage.php");
		        exit();
		    }
		
		else{
		    $erreur = "Mot de passe incorrect";

		}
	}	
	
}
else {
	include "connexion.phtml";
}


?>	





