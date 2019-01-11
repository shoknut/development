<?php

$pdo = new PDO('mysql:host=localhost;dbname=blog', "root","troiswa");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET NAMES UTF8");

if(count($_POST) > 0){
	$query = $pdo->prepare("INSERT INTO author (firstName, lastName)
		VALUES (?,?)");

	$query->execute([$_POST["nom"], $_POST["prenom"]]);

	header("Location: admin.php");
}else{
	include "author.phtml";	
}


?>