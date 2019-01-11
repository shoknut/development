<?php
class Chanteur extends Musician{
	function __construct($_name, $_age){
		parent::__construct($_name, $_age);
		$this->instrument = "Micro";
	}
}


?>