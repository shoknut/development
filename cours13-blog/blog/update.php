<?php

include "bdd.php";

$update = $_GET["numeroArticle"];

//Afficher le titre et le contenu dans la page update
$query = $pdo->prepare ("SELECT *
						 FROM post
						 WHERE id=?");

$query->execute([$update]);

$showArticle = $query->fetch(PDO::FETCH_ASSOC);


//EDITER UN ARTICLE


if(isset($_POST["titre"]) && isset($_POST["article"])){
	$query = $pdo->prepare("UPDATE post
							SET title = ?, content = ?
							WHERE id=?");
	$query->execute([$_POST["titre"], $_POST["article"], $update]);

	header("Location:admin.php");
}
else{
	include "update.phtml";
}



?>