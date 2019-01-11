<?php

class SignupController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        // j'arrive ici lors de la validation du form d'inscription
        // dans mon $formFields, il y aura tout mes inputs du formulaire de la page SignupView.phtml

        $userModel = new UserModel();

        $userModel->insertUser($formFields["firstName"], $formFields["lastName"], $formFields["email"], password_hash($formFields["password"], PASSWORD_DEFAULT), $formFields["year"]."-".$formFields["month"]."-".$formFields["day"], $formFields["address"], $formFields["city"], $formFields["zipcode"], $formFields["country"], $formFields["phone"]);

        $http->redirectTo("/login");
    }
}