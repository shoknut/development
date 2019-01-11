<?php
	class Group{
		protected $name;
		protected $songList = [];
		protected $musicianList = [];

		// construct est appelée automatiquement lors du new()
		function __construct($groupName){
			$this->name = $groupName;
		}

		function getName(){
			return $this->name;
		}

		function getMusicianCount(){
			return count($this->musicianList);
		}

		function getSongCount(){
			return count($this->songList);
		}

		function addMusician($newMusician){
			if(count($this->musicianList) < 6){
				array_push($this->musicianList, $newMusician);
			}
			else{
				echo "Pas plus de 6 musiciens par groupe";
			}
		}
		function displayMusicianList(){
			var_dump($this->musicianList);
		}

		function playSong($song){
			// si la chanson envoyée est dans le tableau songList
			if(in_array($song, $this->songList)){
				echo "<p>Le groupe ".$this->name." joue la chanson ".$song."</p>";
			}
			// si la chanson n'est pas dans le tableau
			else{
				echo "Le groupe ".$this->name." ne connaît pas cette chanson";
			}
		}

		function addSong($song){
			array_push($this->songList, $song);
		}

		function concert(){
			// tableau as element
			foreach($this->songList as $song){
				$this->playSong($song);
			}
		}
	}
?>
