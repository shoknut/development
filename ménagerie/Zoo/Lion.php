<?php
// chat extends Animal, elle hérite toutes les propriétés protected ou public de la classe Animal
class Lion extends Animal{
	// a l'instanciation du Chat (donc new Chat()), j'envoie le nom, l'age et le cri
	function __construct($_name, $_age, $_cri){
		$this->species = "Lion";
		// j'appelle le constructeur du parent pour ne pas avoir a bind les propriétés dans toutes les classes enfants
		parent::__construct($_name, $_age, $_cri);	
	}
}