<?php

include "Musician.php";
include "Guitariste.php";
include "Chanteur.php";
include "Bassiste.php";
include "Batteur.php";
include "Group.php";

//////////// PIKACHU ///////////////////

$pikachu = new Group("pikachu");
$carapuce = new Guitariste("Carapuce",20);
$bulbizarre = new Batteur("Bulbizarre",22);
$salameche = new Chanteur("Salameche",21);
$toguepi = new Bassiste("Toguepi",23);

$pikachu->addMusician($carapuce);
$pikachu->addMusician($bulbizarre);
$pikachu->addMusician($salameche);
$pikachu->addMusician($toguepi);

$pikachu->displayMusicianList();

$pikachu->addSong("Pokemon catch them all !");
$pikachu->addSong("Mezase Pokémon Masutā");
$pikachu->addSong("Pokémon Shinfonikku Medore");
$pikachu->addSong("Natsumeku Sakamichi");
$pikachu->addSong("Kimi ga iru kana");
$pikachu->addSong("Takaharu");

$pikachu->playSong("Pokemon catch them all !");
$pikachu->playSong("Mezase Pokémon Masutā");
$pikachu->playSong("Pokémon Shinfonikku Medore");
$pikachu->playSong("Natsumeku Sakamichi");
$pikachu->playSong("Kimi ga iru kana");
$pikachu->playSong("Takaharu");

$pikachu->displaySongList();
$pikachu->playConcert();

//////////// TARTUFFE ///////////////////

$tartuffe = new Group('tartuffe');
$toto = new Guitariste("Toto",25);
$titi = new Batteur("Titi",22);
$bobo = new Chanteur("Bobo",26);
$baba = new Bassiste("Baba",24);
$lolo = new Guitariste("Lolo",25);
$yoyo = new Bassiste("Yoyo",24);

$tartuffe->addMusician($toto);
$tartuffe->addMusician($titi);
$tartuffe->addMusician($bobo);
$tartuffe->addMusician($baba);
$tartuffe->addMusician($lolo);
$tartuffe->addMusician($yoyo);

$tartuffe->displayMusicianList();

$tartuffe->addSong("Tartenpion s'en va en guerre");
$tartuffe->addSong("Le roi Dagobert a mis sa culotte à l'envers");
$tartuffe->addSong("A la claire fontaine");
$tartuffe->addSong("A la pêche aux moules");

$tartuffe->displaySongList();

$tartuffe->playSong("Tartenpion s'en va en guerre");
$tartuffe->playSong("Le roi Dagobert a mis sa culotte à l'envers");
$tartuffe->playSong("A la claire fontaine");
$tartuffe->playSong("A la pêche aux moules");

// // //////////// COCOMELON ///////////////////

// $cocoMelon = new Group('Coco Melon');
// $mai = new Guitariste("Mai",20);
// $jojo = new Batteur("Jojo",22);
// $gaga = new Chanteur("Gaga",24);
// $jay = new Bassiste("Jay",21);

// $cocoMelon->addMusician($mai);
// $cocoMelon->addMusician($jojo);
// $cocoMelon->addMusician($gaga);
// $cocoMelon->addMusician($jay);


// $cocoMelon->displayMusicianList();

// $cocoMelon->addSong("Mary had a little lamb");
// $cocoMelon->addSong("Wheels on the bus");
// $cocoMelon->addSong("Ram sam sam");
// $cocoMelon->addSong("ABC song");

// $cocoMelon->displaySongList();

// $cocoMelon->playSong("Mary had a little lamb");
// $cocoMelon->playSong("Wheels on the bus");
// $cocoMelon->playSong("Ram sam sam");
// $cocoMelon->playSong("ABC song");



?>
