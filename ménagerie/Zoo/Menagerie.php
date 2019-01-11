<?php 

class Menagerie{
	protected $enclosList = [];
	
	function addEnclos($enclos){
		array_push($this->enclosList, $enclos);
	}
	function findEnclosByName($enclosName){
		foreach($this->enclosList as $enclos){
			if($enclos->getName() == $enclosName){
				return $enclos;
			}
		}
	}
}

?>