<?php

class OrderController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();

        // je dois récup tout les meals pour les afficher dans le select des commandes

        $mealModel = new MealModel();

        $meals = $mealModel->getAllMeals();

        return ["meals"=>$meals];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    }
}