<?php
include "bdd.php";

	//SELECT AUTEUR
	$query = $pdo->prepare("SELECT *
						FROM `author`");

	$query->execute();

	$auteurs = $query->fetchAll(PDO::FETCH_ASSOC);

	//SELECT CATEGORY
	$query = $pdo->prepare("SELECT *
							FROM `category`");

	$query->execute();

	$categories = $query->fetchAll(PDO::FETCH_ASSOC);

	//ENVOI DE L'ARTICLE VERS LA BDD
	if(isset($_POST["titre"])){
		$query = $pdo->prepare("INSERT INTO post (title,content,author_id,categoryId,creationTime)
								VALUES (?,?,?,?,NOW())");
		$query->execute([$_POST["titre"], $_POST["article"], $_POST["auteur"], $_POST["categorie"]]);

		header("Location:admin.php");
	}


include "newArticle.phtml";


?>