<?php

class Lion extends Animal{
	function __construct($_name, $_age){
		parent::__construct($_name, $_age);	
		$this->species = "fauve";
		$this->shout = "roar";
	}

}

?>