<?php
// chaque page est une classe objet PHP
class ValidationController
{
    // $queryFields = $_GET
    /**
     * @param Http $http
     * @param array $queryFields
     */
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();


       $cart = new ValidationModel();

       $order_id = $queryFields["id"];

       $validation = $cart->validation($order_id);


       return ["validate"=>$validation];


    }

}