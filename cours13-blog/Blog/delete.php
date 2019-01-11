<?php

$numeroArticle = $_GET["numeroArticle"];

$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$pdo->exec("SET NAMES UTF8");

$query = $pdo->prepare("DELETE FROM Post WHERE Id = ?");

$query->execute([$numeroArticle]);

header("Location: administration.php");
?>