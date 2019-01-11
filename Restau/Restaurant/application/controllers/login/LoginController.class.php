<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        // rien dans le get
        session_start();
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        // j'arrive ici lors du post de l'email et password

        $userModel = new UserModel();
        $user = $userModel->getUser($formFields["email"],$formFields["password"]);

        if ($user){
           $http->redirectTo("/");
        }
    }
}