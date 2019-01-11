<?php

class Chien extends Animal{
	function __construct($_name, $_age){
		parent::__construct($_name, $_age);	
		$this->species = "dog";
		$this->shout = "wouf";
	}

}

?>