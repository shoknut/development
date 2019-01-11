<?php

	// connexion a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->exec("SET NAMES UTF8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$pseudo = $_POST["pseudo"];
$content = $_POST["comment"];
// ca ca vient du form action grace à la variable d'URL
$articleNumber = $_GET["articleID"];

$query = $pdo->prepare("INSERT INTO Comment (NickName, Contents, CreationTimestamp, Post_Id)
				VALUES (?,?,NOW(), ?)");

$query->execute([$pseudo, $content, $articleNumber]);


header("Location: showArticle.php?articleID=".$articleNumber);
?>