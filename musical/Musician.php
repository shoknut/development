<?php

abstract class Musician{
	protected $name;
	protected $age;
	protected $instrument;
	protected $groupName;
	protected $newSong;

	function __construct($_name, $_age){
		$this->name = $_name;
		$this->age = $_age;
		
	}
		
	function getName(){
		return $this->name;

	}
	function getAge(){
		return $this->age;
	}

	function getInstrument(){
		return $this->instrument;
	}
	
	function getGroupName(){
		return $this->groupName;
	}

	function getSongName(){
		return $this->newSong;
	}

}