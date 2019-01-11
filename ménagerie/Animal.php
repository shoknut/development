<?php

abstract class Animal{
	protected $name;
	protected $age;
	protected $species;
	protected $shout;
	protected $dead;
	protected $mood;
	

	function __construct($_name, $_age){
		$this->name = $_name;
		$this->age = $_age;
		
	}
		
	function getShout(){
		return $this->shout;

	}

	function getMoodChanging($newMood){
		return $this->mood = $newMood;
	}

	
	function getDie(){
		return $this->dead;
	}
	
	function getAnimalName(){
		return $this->name;
	}

	function getSpecies(){
		return $this->species;
	}

	
}