<?php

class Group{
	protected $name;
	protected $songList = [];
	protected $musicianList = [];


	function __construct($_groupName){
		$this->groupName = $_groupName;
		
	}
		
	function addSong($newSong){
		if(count($this->songList) < 6){
			array_push($this->songList, $newSong);
			echo "<p>".$newSong." a été ajouté à la liste";
		}
		else{
			echo "<p> Pas plus de 4 chansons par groupe";
		}

	}

	function addMusician($newMusician){
		if(count($this->musicianList) < 6){
			array_push($this->musicianList, $newMusician);
			echo "<p>".$newMusician->getName()." a été ajouté à la liste";
		}
		else{
			echo "<p>Pas plus de 6 musiciens par groupe</p>";
		}
	}

	function displayMusicianList(){
		$this->musicianList;
	}

	function displaySongList(){
		$this->songList;
	}

	function playSong($song){
		if(in_array($song, $this->songList)){
			
			echo "<p>".$this->groupName." joue la chanson : ' ".$song." '";
		}
		else{
			echo "<p>".$this->groupName." ne connait pas la chanson : ' ".$song." '";
		}
	}

	function playConcert(){

		echo "<p> Le groupe ".$this->groupName." démarre le concert !";
		echo "<p> Ce groupe joue les chansons suivantes : ";
		
		for($i=0; $i<count($this->songList); $i++){
			echo "<p> - ". $this->songList[$i];
		}
	}

	function diff(){
		
	}

}