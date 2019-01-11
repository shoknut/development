<?php
class Square extends Shape{
	protected $width;
	protected $height;

	public function __construct(){
		parent::__construct();
		$this->height = 0;
		$this->width = 0;
	}
	// chaque forme a sa propre fonction Draw() et recoit l'instance du SvgRenderer
	public function draw($svgRenderer){
		// la fonction draw appelle la fonction du renderer dont elle a besoin, en lui envoyant les parametres
		$svgRenderer->drawSquare($this->color, $this->x, $this->y, $this->opacity, $this->width, $this->height);
	}

	public function setSize($width, $height){
		$this->width = $width;
		$this->height = $height;
	}
}



?>