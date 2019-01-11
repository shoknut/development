<?php

include "bdd.php";

if(session_status() == PHP_SESSION_NONE){
	header("Location:homePage.php");
	exit();
}

$query = $pdo->prepare("SELECT post.id, title, content, creationTime, firstName, lastName,name 
						FROM `post` 
						INNER JOIN author ON post.author_id=author.id
						INNER JOIN category ON post.categoryId=category.id");

$query->execute();

$lists = $query->fetchAll(PDO::FETCH_ASSOC);

include "admin.phtml";
?>