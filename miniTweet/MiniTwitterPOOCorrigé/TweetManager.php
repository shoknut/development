<?php
class TweetManager{
    protected $pdo;

    // appelé au moment du new Manager()
    function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=twitter", "root","troiswa");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $this->pdo->exec("SET NAMES UTF8");
    }

    function insertTweet($pseudo, $content){
        $query = $this->pdo->prepare("INSERT INTO Tweet (pseudo, content, date) VALUES (?,?,NOW())");
        $query->execute([$pseudo, $content]);

    }

    function getAllTweets(){
        $query = $this->pdo->prepare("SELECT * FROM Tweet");
        $query->execute();        
        $tweetsSQL = $query->fetchAll(PDO::FETCH_ASSOC);

        $tweets = [];

        foreach($tweetsSQL as $sql){
            $tweet = new Tweet($sql["id"], $sql["pseudo"], $sql["content"], $sql["date"]);
            array_push($tweets, $tweet);
        }
        return $tweets;
    }
    function deleteTweet($id){
         $query = $this->pdo->prepare("DELETE FROM Tweet WHERE id = ?");
        $query->execute([$id]); 
    }
    // fonction utilisée par la requete AJAX pour récupérer LE tweet a éditer
    function getOneTweet($id){
        $query = $this->pdo->prepare("SELECT * FROM Tweet WHERE id= ?");
        $query->execute([$id]);        
        $tweet = $query->fetch(PDO::FETCH_ASSOC);
        return $tweet;
    }

    function updateTweet($id, $pseudo, $content){
      $query = $this->pdo->prepare("UPDATE Tweet SET pseudo = ?, content = ? WHERE id = ? ");
        $query->execute([$pseudo, $content, $id]);   
    }
}


?>