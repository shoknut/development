<?php


class TweetManager{

	protected $pdo;	

	public function __construct(){
		$this->pdo = new PDO('mysql:host=localhost;dbname=miniTweet', "root","troiswa");
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->pdo->exec("SET NAMES UTF8");
	}

	public function getAllTweet(){

		
		$query = $this->pdo->prepare("SELECT * FROM tweet");

		$query->execute();
		
		$allTweet = $query->fetchAll(PDO::FETCH_ASSOC);

		$tweets = [];
		 foreach ($allTweet as $tweetSQL){
		 	$tweet = new Tweet($tweetSQL["id"],$tweetSQL["pseudo"],$tweetSQL["content"],$tweetSQL["dateTime"]);
		 	array_push($tweets, $tweet);
		 }
		
		return $tweets;
	}

	public function insertTweet($pseudo, $content){
		
		$query = $this->pdo->prepare("INSERT INTO tweet (pseudo,content,dateTime)
								VALUES (?,?,NOW())");

		$query->execute([$pseudo, $content]);

		
	}

	public function deleteTweet($delete){
		
		$query = $this->pdo->prepare("DELETE FROM 'tweet' WHERE id=?");
		$query->execute([$delete]);

	}

	public function editTweet($pseudo, $content, $id){
		
		$query = $this->pdo->prepare("UPDATE tweet SET pseudo = ?, content = ? WHERE id=?");
		$query->execute([$pseudo, $content, $id]);
		

	}

	public function getTweet($id){
		$query = $this->pdo->prepare("SELECT pseudo, content FROM tweet WHERE id = ?");
		$query->execute([$id]);

		$tweetToEdit = $query->fetch(PDO::FETCH_ASSOC);
		return $tweetToEdit;
	}

}


?>