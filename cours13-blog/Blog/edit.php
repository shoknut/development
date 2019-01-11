<?php

// vous connecter a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$pdo->exec("SET NAMES UTF8");

$query = $pdo->prepare("SELECT * FROM Post WHERE Id = ?");

$query->execute([$_GET["numeroArticle"]]);

$post = $query->fetch(PDO::FETCH_ASSOC);

var_dump($_POST);

if (isset($_POST["titre"])){
	$query = $pdo->prepare("UPDATE Post SET Title = ?, Contents = ? WHERE Id = ?");
	$query->execute([$_POST["titre"], $_POST["contenu"], $_GET["numeroArticle"]]);
	header("Location: administration.php");
}else{
	include "edit.phtml";	
}




?>