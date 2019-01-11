<?php


	// connexion a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->exec("SET NAMES UTF8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

if(isset($_POST["firstName"])){
	$query = $pdo->prepare("INSERT INTO Author (FirstName, LastName)
	VALUES (?, ?)");

	$query->execute([$_POST["firstName"],$_POST["lastName"]]);

	header("Location: homepage.php");
	// sortir du code php
	exit();
	// Ecriture de la requete à insérer
	// Execution de la requête
}


include "addAuthor.phtml";

	

?>