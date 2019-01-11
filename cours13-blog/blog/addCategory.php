<?php

$pdo = new PDO('mysql:host=localhost;dbname=blog', "root","troiswa");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET NAMES UTF8");

if(count($_POST) > 0){
	$query = $pdo->prepare("INSERT INTO category (name)
		VALUES (?)");

	$query->execute([$_POST["categoryName"]]);

	header("Location: admin.php");
}else{
	include "category.phtml";	
}


?>