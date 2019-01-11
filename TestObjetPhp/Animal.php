<?php

abstract class Animal{
	protected $name;
	protected $age;
	protected $cri;

	function __construct($_name, $_age, $_cri){
		$this->name = $_name;
		$this->age = $_age;
		$this->cri = $_cri;
	}
		// fonction getter
	function getName(){
		return $this->name;
	}
	function setName($newName){
		$this->name = $newName;
	}
	function getCri(){
		return $this->cri;
	}
}