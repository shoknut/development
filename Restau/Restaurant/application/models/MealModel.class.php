<?php
/**
 * Created by PhpStorm.
 * User: wamont1-16
 * Date: 27/12/18
 * Time: 10:55
 */

// les modèles sont des fichiers (des classes) qui vont intervenir sur UNE table de la base

// ensemble de fonction consistant a effectuer des actions sur la base SQL

// ici c'est pour la table Meal

class MealModel
{
    // récupère tout les repas
    function getAllMeals(){
        // instance de PDO dans le framework
        $database = new Database();

        $sql = "SELECT * FROM Meal";

        $meals = $database->query($sql);

        return $meals;
    }

    // recupère juste UN repas
    function getOneMeal($id){
        $database = new Database();

        return $database->queryOne("SELECT * FROM Meal WHERE Id = ?", [$id]);
    }
}