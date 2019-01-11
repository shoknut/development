<?php

class Enclos{
	protected $name;
	protected $animalList = [];
	protected $temperature = 20;
	protected $maxPlaces = 5;
	// l'espece acceptée dans l'enclos
	protected $type;
	// fonction qui ajoute un animal selon l'espece
	function addAnimal($animal){
		// si y'a pas encore d'animaux dans l'enclos, il determine le nom de l'enclos et l'espece acceptée
		if(empty($this->animalList)){
			$this->type = $animal->getSpecies();
			$this->name = $animal->getSpecies()." Place";
		}
		// si mon enclos contient encore des places libres
		if(count($this->animalList) < $this->maxPlaces){
			// si l'animal a push est de la même espece que celle acceptée
			if($animal->getSpecies() == $this->type){
				array_push($this->animalList, $animal);
			}else{
				echo "Les animaux ne sont pas de la même espèce";
			}
		}else{
			echo "On ne peut pas ajouter plus d'animal dans l'enclos";
		}
	}
	// petite variante de addAnimal pour en rajouter plusieurs d'un coup
	function addAnimals($animals){
		foreach($animals as $animal){
			$this->addAnimal($animal);
		}
	}
	function getName(){
		return $this->name;
	}
	function getAnimalList(){
		return $this->animalList;
	}
	function changeTemperature($newTemp){
		$this->temperature = $newTemp;
		foreach($this->animalList as $animal){
			if ($this->temperature >= 20){
				$animal->setMood("joyeux");
				echo "L'animal ".$animal->getName()." se sent ".$animal->getMood();	
			}
			if ($this->temperature > 10 && $this->temperature < 20){
				$animal->setMood("en forme");
				echo "L'animal ".$animal->getName()." se sent ".$animal->getMood();	
			}
			if ($this->temperature <= 10 && $this->temperature > 0){
				$animal->setMood("malade");
				echo "L'animal ".$animal->getName()." se sent ".$animal->getMood();	
			}
			if ($this->temperature <= 0){
				$animal->setMood("mort");
				echo "L'animal ".$animal->getName()." est ".$animal->getMood();		
			}
		}
	}
}

?>