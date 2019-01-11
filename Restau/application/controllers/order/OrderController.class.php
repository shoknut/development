<?php
// chaque page est une classe objet PHP
class OrderController
{
    // $queryFields = $_GET
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
        $mealModel = new MealModel();
        // appeler la fonction listAllMeals();
        $meals = $mealModel->listAllMeals();
        // envoyer les resultats à la vue HomeView.phtml
        return ["meals"=>$meals];
    }

}