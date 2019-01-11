<?php

include "Animal.php";
include "Chat.php";
include "Chien.php";
include "Lion.php";
include "Singe.php";
include "Enclos.php";
include "Zoo.php";


$zeBoo = new Zoo("zeBoo");

$felix = new Chat("Felix", 5);
$miaous = new Chat("Miaous", 4);
$melo = new Chat("Melo", 4);
$garfield = new Chat("Garfield", 10);
$filou = new Chat("Filou", 7);
$goschi = new Chat("Goschi", 8);

$medor = new Chien("Medor", 7);
$rex = new Chien("Rex", 2);

$simba = new Lion("Simba", 10);
$mufasa = new Lion("Mufasa", 40);

$rafiki = new Singe("Rafiki", 50);
$cesar = new Singe("Cesar", 15);

$dogCage = new Enclos("dogCage", 25, "chien");
$catCage = new Enclos("Chez Felix", 25, "felin");
$lionCage = new Enclos("lionCage", 30, "fauve");
$monkeyCage = new Enclos("monkeyCage", 25, "monkey");

$zeBoo->addEnclos($dogCage);
$zeBoo->addEnclos($catCage);
$zeBoo->addEnclos($lionCage);
$zeBoo->addEnclos($monkeyCage);


$catCage->addAnimal($miaous);
$catCage->addAnimal($felix);
$catCage->addAnimal($melo);
$catCage->addAnimal($garfield);
$catCage->addAnimal($filou);
$catCage->addAnimal($goschi);

$catCage -> displayAnimalList();
$catCage -> lowTemperature(15);
$catCage -> lowTemperature(10);

$catCage -> highTemperature(30);

$zeBoo->findEnclosByName("pigeon");
$zeBoo->findEnclosByName("monkeyCage");

?>
