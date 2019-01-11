<?php

// rendu de SVG
class SvgRenderer{
	// tableau de balises formes SVG
	protected $resultsSVG =array();
	
	//["<rect />", "<rect />", "<circle>"]
	// tableau de class Shape
	protected $shapes = array();

	//[new Rectangle(), new Rectangle(), new Circle()]

	public function addShape($shape){
		array_push($this->shapes, $shape);
	}

	// sert a dessiner une forme rectangle
	public function drawRectangle($color, $x, $y, $opacity, $width, $height, $textContent, $xText, $yText, $textColor){
		$svg = "<rect x='$x' y='$y' width='$width' height='$height' fill='$color' opacity='$opacity' />";
		$svg .= "<text x='$xText' y='$yText'fill='$textColor'> $textContent </text>";
		array_push($this->resultsSVG, $svg);
	}

	public function drawSquare($color, $x, $y, $opacity, $width, $height){
		$svg = "<rect x='$x' y='$y' width='$width' height='$height' fill='$color' opacity='$opacity' />";
		array_push($this->resultsSVG, $svg);

	}

	public function drawCircle($color, $x, $y, $opacity, $rayon){
		$svg = "<circle cx='$x' cy='$y' r='$rayon' fill='$color' opacity='$opacity' />";
		array_push($this->resultsSVG, $svg);
		
	}

	public function drawTriangle($color, $opacity, $x1, $y1, $x2, $y2, $x3, $y3){
		$svg = "<polygon points='$x1,$y1,$x2,$y2,$x3,$y3' fill='$color' opacity='$opacity' />";
		array_push($this->resultsSVG, $svg);
		
	}	

	// sert à l'affichage
	public function getResultsSVG(){
		// je crée la balise qui va contenir le SVG
		$svgContainer = "<svg height='600px' width='600px'>";
		// concaténer le contenu de mon tableau des formes SVG
		$svgContainer .= implode($this->resultsSVG);
		// je ferme la balise SVG
		$svgContainer .= "</svg>";
		
		return $svgContainer;
	}

	public function startProgram(){
		foreach($this->shapes as $shape){
			$shape->draw($this);
		}
	}
}