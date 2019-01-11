<?php

include "Shape.php";
include "Rectangle.php";
include "Square.php";
include "Ellipse.php";
include "Triangle.php";
include "SVGRenderer.php";

// instancier le controlleur de forme
$renderer = new SvgRenderer();

// instancier une forme
$rectangle = new Rectangle();
$rectangle2 = new Rectangle();

$carre = new Square();
$circle = new Ellipse();

$triangle = new Triangle();



// parametrer les propriétés de ma forme
$rectangle->setColor("red");
$rectangle->setLocation(30,130);
$rectangle->setSize(50,100);
$rectangle->setText(35,160);
$rectangle->setTextColor("black");
$rectangle->setTextContent("Hello");

$rectangle2->setColor("green");
$rectangle2->setLocation(100,200);
$rectangle2->setSize(100,50);

$carre->setColor("blue");
$carre->setLocation(150,150);
$carre->setSize(50,50);

$circle->setColor("pink");
$circle->setLocation(170,100);
$circle->setCircleSize(20);

$triangle->setColor("purple");
$triangle->setSize(50,15,100,100,0,100);


$renderer->addShape($rectangle);
$renderer->addShape($rectangle2);

$renderer->addShape($carre);

$renderer->addShape($circle);

$renderer->addShape($triangle);


$renderer->startProgram();


include "index.phtml";

?>