<?php

class HomeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
    	// j'arrive ici a l'affichage de la page Home

        // pour accéder au fonction de MealModel
        $mealModel = new MealModel();

        // stockage dans une variable $meals le contenu du Fetch All de la base
        $meals = $mealModel->getAllMeals();

        // envoyer $meals a la vue HomeView.phtml
        return ["meals"=>$meals];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}