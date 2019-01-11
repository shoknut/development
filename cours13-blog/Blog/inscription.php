<?php

// vous connecter a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");

$pdo->exec("SET NAMES UTF8");
$erreur = "";

if(isset($_POST["username"])){
	if($_POST["password"] == $_POST["confpassword"]){
		$query = $pdo->prepare("INSERT INTO User (username, password)
						VALUES (?,?)");

		$query->execute([$_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT)]);

		header("Location: homepage.php");
	}
	else{
		$erreur = "le mot de passe n'est pas identique a la confirmation";
	}
}


 include "inscription.phtml";

?>