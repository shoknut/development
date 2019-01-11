<?php

// vous connecter a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");

$pdo->exec("SET NAMES UTF8");
$erreur = "";

if(isset($_POST["username"])){
	$query = $pdo->prepare("SELECT * FROM User WHERE username = ?");
	$query->execute([$_POST["username"]]);

	$user = $query->fetch(PDO::FETCH_ASSOC);
	var_dump($user);
	// si le user existe
	if ($user){
		if(password_verify($_POST["password"], $user["password"])){
			// démarrage du cookie de session
			session_start();
			// $_SESSION représente le cookie, vous pouvez enregistrer dedans autant d'infos que vous voulez, les infos concernent l'utilisateur connecté à la session
			$_SESSION["id"] = $user["id"];
			$_SESSION["username"] = $user["username"];
			$_SESSION["role"] = $user["role"];
			header("Location: homepage.php");
		}else{
			$erreur = "Mot de passe incorrect";
		}
	}
}


 include "login.phtml";

?>