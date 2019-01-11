<?php

include "TweetManager.php";
include "Tweet.php";

$tweets = new TweetManager();


//Envoyer le tweet à la BDD
if(isset($_GET["action"])){
	if($_GET["action"] == "add"){

		$tweets->insertTweet($_POST["pseudo"], $_POST["content"]);
		header("Location: main.php");

	}
	if($_GET["action"] == "ajax"){
		// var_dump($tweets->getTweet($_GET["id"]));
		echo json_encode($tweets->getTweet($_GET["id"]));
		exit();
	}
	if(isset($_POST["pseudo"]) && isset($_POST["content"])){
		if($_GET["action"] == "edit"){
			$tweets->editTweet($_POST["pseudo"], $_POST["content"], $_GET["id"]);
			header("Location: main.php");
		}
		if($_GET["action"] == "delete"){
			$tweets->deleteTweet($_GET["id"]);
			header("Location: main.php");
		}
	}
}

// editer des tweets





include "index.phtml";
?>