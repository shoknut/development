<?php

class Enclos{
	
	protected $animalList = [];
	protected $enclosTemp;
	protected $maxPlace = 5;
	protected $enclosName;
	protected $enclosSpecies;
	protected $etatGeneral;

	function __construct($_enclosName, $_enclosTemp, $_enclosSpecies){
		$this->enclosName = $_enclosName;
		$this->enclosTemp = $_enclosTemp;
		$this->enclosSpecies = $_enclosSpecies;
	}

	function getEnclosName(){
		return $this->enclosName;
	}

	function addAnimal($newAnimal){
		
		if(count($this->animalList) < $this->maxPlace && $newAnimal->getSpecies() == $this->enclosSpecies){

			array_push($this->animalList, $newAnimal);
			echo "<p>".$newAnimal->getAnimalName()." a été ajouté à l'enclos ". $this->enclosSpecies."</p>";


		}
		else{
			echo "<p> On ne peut pas ajouter d'animal dans cet enclos </p>";
		}
	}

	function displayAnimalList(){
		$this->animalList;
	}

	function lowTemperature($newTemp){
		$this->enclosTemp -= $newTemp;
		echo $this->enclosTemp;
		foreach($this->animalList as $animal){
			if($this->enclosTemp > 20){
				$newMood = "happy =)"; 
				$animal->getMoodChanging($newMood);
				$this->etatGeneral = $newMood;
				
			}
			else if($this->enclosTemp > 5 && $this->enclosTemp <= 10){
				$newMood = "sad and ill ='("; 
				$animal->getMoodChanging($newMood);
				$this->etatGeneral = $newMood;
			}
			else if($this->enclosTemp <= 0){
				$newMood = "dead !"; 
				$animal->getMoodChanging($newMood);
				$this->etatGeneral = $newMood;
			}
		}

		echo "<p>All animals are : ".$this->etatGeneral."</p>";


	}

	function highTemperature($newTemp){
		$this->enclosTemp += $newTemp;
		echo $this->enclosTemp;
		foreach($this->animalList as $animal){
			if($this->enclosTemp > 20){
				$newMood = "happy =)"; 
				$animal->getMoodChanging($newMood);
				$this->etatGeneral = $newMood;
				
			}
			
		}

		echo "<p>All animals are : ".$this->etatGeneral."</p>";
	}
}

?>