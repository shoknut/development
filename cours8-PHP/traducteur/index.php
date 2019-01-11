<?php
//echo de debug / affichage de debug
// $_POST est une variable super globale qui contient TOUS les inputs envoyés par le formulaire

    //var_dump($_POST);
include "traducteur.phtml";

//DÉCLARATION D'UN TABLEAU ASSOCATIF AVEC DES CLES EN ANGLAIS ET DES VALEURS TRADUITES EN FRANCAIS
    $dictionary = ["cat" => "chat",
                    "dog" => "chien",
                    "monkey" => "singe",
                    "sea" => "mer",
                    "sun" => "soleil"
    ];

$langage = $_POST["translate"];
$word = $_POST["word"];

//je reçois le mot envoyé dans le $_POST
//ce que je dois mettre dans les crochets de dictionnary, c'est le mot ENVOYE PAR LE FORMULAIRE

    if($langage == "Anglais-Français"){
            // si tu cherches une clé dans un tableau
        if (array_key_exists($word, $dictionary))
        {
            echo "La traduction de ce mot est " .$dictionary[$word];
        }
        else {
            echo "Je ne connais pas le mot " .$word;
        }
    }

    if($langage == "Français-Anglais"){
        // si tu cherches la valeur dans le tableau
        if(in_array($word, $dictionary)== true){

            $cle = array_search($word, $dictionary);
            echo "La traduction de ce mot est " .$cle;
        }
        else {
            echo "Je ne connais pas le mot " .$word;
        }


    }








//si jamais le mot envoyé n'est pas une CLE de votre tableau, affichez un message d'erreur : "je ne connais pas ce mot";
    //echo $word;

?>