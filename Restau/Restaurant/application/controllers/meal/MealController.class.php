<?php

class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();

        $mealModel = new MealModel();

        $meal = $mealModel->getOneMeal($queryFields["numeroRepas"]);

        $http->sendJsonResponse($meal);
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    }
}