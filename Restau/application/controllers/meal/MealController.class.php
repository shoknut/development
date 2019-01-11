<?php
// chaque page est une classe objet PHP
class MealController
{
    // $queryFields = $_GET
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();

        //sélection d'un repas
        $mealSelected = $queryFields["id"];

        $takeIdBySelect = new MealModel();
        $idRecupered = $takeIdBySelect->takeOneMeal($mealSelected);
        $http->sendJsonResponse($idRecupered);

    }

}