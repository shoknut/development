<?php
// chaque page est une classe objet PHP
class AdminController
{
    // $queryFields = $_GET
    /**
     * @param Http $http
     * @param array $queryFields
     */
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();

        $mealModel = new MealModel();
        $meals = $mealModel->listAllMeals();


        $mealModel->delete("id");


        return ["meals"=>$meals];


    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        session_start();

        $newProduct = new MealModel();

        $newProduct->newProduct(
            $formFields["Name"],
            $formFields["Photo"],
            $formFields["Description"],
            $formFields["QuantityInStock"],
            $formFields["BuyPrice"],
            $formFields["SalePrice"]

        );

        $http->redirectTo("/admin");




    }

}