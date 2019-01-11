<?php

class Chien extends Animal{
	function __construct($_name, $_age, $_cri){
		$this->species = "Chien";
		parent::__construct($_name, $_age, $_cri);	
	}
}



?>