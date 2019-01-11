<?php

class Chat extends Animal{
	function __construct($_name, $_age){
		parent::__construct($_name, $_age);	
		$this->species = "felin";
		$this->shout = "miaou";
		
	}

}

?>