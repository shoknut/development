<?php

// cette classe est abstraite car elle n'a pas vocation à etre instanciée
// elle sert de modèle mère pour les classes qui en hériterons
abstract class Animal{
	// n'oubliez pas de déclarer tout vos champs a la racine de le classe
	// un champ protégé = un champ accessible dans la classe qui l'a déclaré ainsi que dans tout ses enfants (les classes qui héritent)
	protected $name;
	protected $age;
	protected $cri;
	protected $species;
	protected $mood;
	// le constructeur est appelée lors de l'instance, lors du new ()
	// les paramètres du constructeur ne sont pas obligatoires,
	// ils servent a paramètrer les valeurs de bases de votre classe
	// vous devez les envoyer lors du new()
	function __construct($_name, $_age, $_cri){
		// binder les propriétés avec les paramètres reçus
		$this->name = $_name;
		$this->age = $_age;
		$this->cri = $_cri;
		$this->mood = "Joyeux";
	}
		// fonction getter
	// sert a récupérer des champs protected ou private
	function getName(){
		return $this->name;
	}
	// function setter
	// ca sert a assigner un champ protected ou private
	function setName($newName){
		$this->name = $newName;
	}
	function getCri(){
		return $this->cri;
	}
	function getSpecies(){
		return $this->species;
	}
	function setMood($newMood){
		$this->mood = $newMood;
	}
	function getMood(){
		return $this->mood;
	}
}