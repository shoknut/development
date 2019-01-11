<?php

// vous connecter a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$pdo->exec("SET NAMES UTF8");


$query = $pdo->prepare("SELECT * FROM Author");

$query->execute();

$authors = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $pdo->prepare("SELECT * FROM Category");

$query->execute();

$categories = $query->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST["titre"])){
	$query = $pdo->prepare("INSERT INTO Post (Title, Contents, CreationTimestamp, Author_Id, Category_Id)
		VALUES (?,?, NOW(), ?, ?)");

	$query->execute([$_POST["titre"], $_POST["contenu"], $_POST["author"], $_POST["category"]]);

	header("Location: administration.php");

}


 include "addArticle.phtml";

?>