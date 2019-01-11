<?php
include "Menagerie.php";
include "Enclos.php";
include "Animal.php";
include "Chien.php";
include "Chat.php";
include "Singe.php";
include "Lion.php";

$zoo = new Menagerie();

$chien = new Chien("Medor","5", "Waouf");
$chien2 = new Chien("Cesar","5", "Waouf");
$chat = new Chat("Felix",2,"miaou");
$simba = new Lion("Simba",2,"Graou");

$enclosChien = new Enclos();
$enclosLion = new Enclos();

$zoo->addEnclos($enclosChien);
$zoo->addEnclos($enclosLion);


$enclosChien->addAnimals([$chien, $chien2]);
$enclosLion->addAnimal($simba);


$enclosTrouve = $zoo->findEnclosByName("Lion Place");


$enclosChien->changeTemperature(21);

var_dump($enclosTrouve->getAnimalList());