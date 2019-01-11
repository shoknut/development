<?php

class Singe extends Animal{
	function __construct($_name, $_age){
		parent::__construct($_name, $_age);	
		$this->species = "monkey";
		$this->shout = "hihihahahouhou";
	}

}

?>