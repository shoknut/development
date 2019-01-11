<?php


abstract class Musician{
	protected $instrument;
	protected $name;
	protected $age;
	protected $groupName;

	function __construct($_name, $_age){
		$this->name = $_name;
		$this->age = $_age;
	}
}