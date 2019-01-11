<?php
// chaque page est une classe objet PHP
class HomeController
{
    // si je viens d'un lien OU d'un requete ajax, je passe dans cette fonction
    // HTTP -> contient toutes les informations sur la page demandée , la requete HTTP
    // cette classe HTTP contient la fonction de redirection
    // $queryFields = $_GET
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
    	// je veux créer mon mealModel
        $mealModel = new MealModel();
        // appeler la fonction listAllMeals();
        $meals = $mealModel->listAllMeals();
        // envoyer les resultats à la vue HomeView.phtml
        return ["meals"=>$meals];
    }

    // si je viens d'un formulaire submit, je passe dans cette fonction
    // HTTP voir plus haut
    // $formFields = $_POST
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