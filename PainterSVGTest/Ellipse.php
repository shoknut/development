<?php
class Ellipse extends Shape{
	protected $rayon;
	

	public function __construct(){
		parent::__construct();
		$this->rayon = 0;
		
	}
	// chaque forme a sa propre fonction Draw() et recoit l'instance du SvgRenderer
	public function draw($svgRenderer){
		// la fonction draw appelle la fonction du renderer dont elle a besoin, en lui envoyant les parametres
		$svgRenderer->drawCircle($this->color, $this->x, $this->y, $this->opacity, $this->rayon);
	}

	public function setCircleSize($rayon){
		$this->rayon = $rayon;
		
	}
}



?>