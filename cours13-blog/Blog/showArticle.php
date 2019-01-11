<?php

// Récupération de la variable envoyé par l'url en $_GET
$articleID = $_GET["articleID"];

// Chercher sur la BDD l'article cliqué et l'afficher
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->exec("SET NAMES UTF8");

$query = $pdo->prepare("SELECT Post.id, Title, Contents, CreationTimestamp, FirstName, LastName FROM Post INNER JOIN Author ON Author.id = Post.Author_id 
	WHERE Post.id = ?");

$query->execute([$articleID]);

$post = $query->fetch(PDO::FETCH_ASSOC);

$query = $pdo->prepare("SELECT * FROM Comment WHERE Post_Id= ?");

$query->execute([$articleID]);

$commentaires = $query->fetchAll(PDO::FETCH_ASSOC);


include "showArticle.phtml";
?>