<?php

// nous avons codé le modèle, celui qui s'occupe exclusivement des appels BDD, et il renvoie les résultats au controller
class MealModel
{
    // Récupération de tout les repas
    function listAllMeals(){
        // instance de la classe qui s'occupe de gérer le pdo
        $database = new Database();

        // récupération des repas dans une $ grâce a la fonction query contenu dans la classe database
        $meals = $database->query("SELECT * FROM Meal");

        return $meals;
    }

    function takeOneMeal($id){
        $database = new Database();

        //insertion de la commande

        $oneMeals = $database->queryOne("SELECT * FROM Meal WHERE id=?", [$id]);

        return $oneMeals;


    }

    function delete($id){
        $database = new Database();

        $database->executeSql("DELETE FROM Meal WHERE id = ?", [$id]);
    }

    function newProduct($name,$photo,$description,$quantity,$buyPrice, $salePrice){
        $database = new Database();
        
        $database->executeSql("INSERT INTO Meal (Name, Photo, Description, QuantityInStock, BuyPrice, SalePrice) VALUES(?,?,?,?,?,?)", [$name,$photo,$description,$quantity,$buyPrice, $salePrice]);
    }

}