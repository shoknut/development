<?php
include "Tweet.php";
include "TweetManager.php";

$tweetManager = new TweetManager();

$tweets = $tweetManager->getAllTweets();

if (isset($_GET["action"])){
    // tout mes ifs
    if ($_GET["action"] == "add"){
        $tweetManager->insertTweet($_POST["pseudo"], $_POST["content"]);
        header("Location: main.php");
    }
    if ($_GET["action"] == "delete"){
        $tweetManager->deleteTweet($_GET["id"]);
        header("Location: main.php");
    }
    if ($_GET["action"] == "ajax"){
        $tweet = $tweetManager->getOneTweet($_GET["id"]);
        // renvoi ajax
        echo json_encode($tweet);
        exit();
    }
    if($_GET["action"] == "edit"){
        $tweetManager->updateTweet($_GET["id"], $_POST["pseudo"], $_POST["content"]);
        header("Location: main.php");
    }
}

include "index.phtml";
?>