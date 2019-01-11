<?php
class Triangle extends Shape{
	protected $x1;
	protected $y1;
	protected $x2;
	protected $y2;
	protected $x3;
	protected $y3;
	protected $opacity;
	protected $color;

	public function __construct(){
		$this->opacity = 0.7;
		$this->x1 = 0;
		$this->y1 = 0;
		$this->x2 = 0;
		$this->y2 = 0;
		$this->x3 = 0;
		$this->y3 = 0;
		$this->color = "black";
	}
	// chaque forme a sa propre fonction Draw() et recoit l'instance du SvgRenderer
	public function draw($svgRenderer){
		// la fonction draw appelle la fonction du renderer dont elle a besoin, en lui envoyant les parametres
		$svgRenderer->drawTriangle($this->color, $this->opacity, $this->x1, $this->y1, $this->x2, $this->y2, $this->x3, $this->y3);
	}

	public function setSize($x1,$y1,$x2,$y2,$x3,$y3){
		$this->x1 = $x1;
		$this->y1 = $y1;
		$this->x2 = $x2;
		$this->y2 = $y2;
		$this->x3 = $x3;
		$this->y3 = $y3;
		
	}
}



?>