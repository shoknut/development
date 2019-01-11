<?php

class Zoo{
	protected $enclosList = [];
	protected $enclosName;

	function __construct($_enclosName){
		$this->enclosName = $_enclosName;

	}


	function addEnclos($newEnclos){
		array_push($this->enclosList, $newEnclos);
		echo "<p>".$newEnclos->getEnclosName()." a été ajouté à ".$this->enclosName."</p>";

	}

	function findEnclosByName($name){

		foreach($this->enclosList as $enclos){
			$enclos->getEnclosName();
		}

		if($enclos->getEnclosName() == $name){
				echo "<p>".$name. " est dans la liste de ".$this->enclosName."</p>";
		}
		else{
			echo "<p>".$name. " n'est pas dans la liste de ".$this->enclosName."</p>";
		}
		
		// regarde dans tout le tableau $enclosList
		// si l'enclos en cours a le meme nom que $name
		// alors tu return l'enclos
	}

	function displayEnclosList(){
		$this->enclosList;
	}
}

?>