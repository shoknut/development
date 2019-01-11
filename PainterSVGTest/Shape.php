<?php

// classe mère de toutes les formes SVG
abstract class Shape{
	protected $color;
	protected $textColor;
	protected $x;
	protected $y;
	protected $opacity;

	// j'ai mis un ; a la fin
	// elle n'a pas vocation a etre determinée dans cette classe mère
	abstract public function draw($renderer);

	public function __construct(){
		$this->color = "black";
		$this->x = 0;
		$this->y = 0;
		$this->opacity = 0.7;
	}
	public function setColor($newColor){
		$this->color = $newColor;
	}

	

	public function setLocation($x,$y){
		$this->x = $x;
		$this->y = $y;
	}


	public function setOpacity($opacity){
		$this->opacity = $opacity;
	}
}