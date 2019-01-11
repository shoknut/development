<?php
class Rectangle extends Shape{
	protected $width;
	protected $height;
	protected $textContent;
	protected $xText;
	protected $yText;
	protected $textColor;

	public function __construct(){
		parent::__construct();
		$this->height = 0;
		$this->width = 0;
		$this->textContent;
		$this->xText = 0;
		$this->yText = 0;
		$this->textColor;
	}
	// chaque forme a sa propre fonction Draw() et recoit l'instance du SvgRenderer
	public function draw($svgRenderer){
		// la fonction draw appelle la fonction du renderer dont elle a besoin, en lui envoyant les parametres
		$svgRenderer->drawRectangle($this->color, $this->x, $this->y, $this->opacity, $this->width, $this->height, $this->textContent, $this->xText, $this->yText, $this->textColor);
	}

	public function setSize($width, $height){
		$this->width = $width;
		$this->height = $height;
	}

	public function setTextContent($newTextContent){
		$this->textContent = $newTextContent;
	}

	public function setText($xText, $yText){
		$this->xText = $xText;
		$this->yText = $yText;
	}

	public function setTextColor($textColor){
		$this->textColor = $textColor;
	}
}



?>