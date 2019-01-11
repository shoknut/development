<?php
include "Musician.php";
include "Chanteur.php";
include "Batteur.php";
include "Bassiste.php";
include "Guitariste.php";
include "Group.php";


$morgan = new Chanteur("Morgan", 28);
$hadrien = new Guitariste("Hadrien", 23);
$olivia = new Bassiste("Olivia", 18);

$cradcore = new Group("CradCore");
$group2 = new Group("Groupe2");


$cradcore->addMusician($morgan);
$cradcore->addMusician($hadrien);

$group2->addMusician($morgan);
$group2->addMusician($hadrien);
$group2->addMusician($olivia);

$cradcore->displayMusicianList();

$cradcore->addSong("bonhomme en mousse");
$cradcore->addSong("AZER");
$cradcore->addSong("QSDF");
$cradcore->addSong("TYUIOP");

$cradcore->concert();

whoIsBigger($cradcore, $group2);

function whoIsBigger($group1, $group2){
	if($group1->getMusicianCount() > $group2->getMusicianCount()){
		echo "Le groupe ".$group1->getName()." a le plus de musiciens";
	}else{
		echo "Le groupe ".$group2->getName()." a le plus de musiciens";
	}

	if($group1->getSongCount() > $group2->getSongCount()){
		echo "Le groupe ".$group1->getName()." a le plus de chansons connues";
	}else{
		echo "Le groupe ".$group2->getName()." a le plus de chansons connues";	
	}
}
?>