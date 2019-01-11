<?php
// chaque page est une classe objet PHP
class LoginController
{
    // $queryFields = $_GET
    public function httpGetMethod(Http $http, array $queryFields)
    {
        /*
         * Méthode appelée en cas de requête HTTP GET
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
         */

    }

    // si je viens d'un formulaire submit, je passe dans cette fonction
    // HTTP voir plus haut
    // $formFields = $_POST
    public function httpPostMethod(Http $http, array $formFields)
    {

        $loginModel = new LoginModel();
        $user = $loginModel->login(
            $formFields["mail"],
            $formFields["password"]
        );

        $erreur ="";

        if($user){
            session_start();
            //$_SESSION représente le cookie
            $_SESSION["id"] = $user["id"];
            $_SESSION["address"] = $user["address"];
            $_SESSION["zipCode"] = $user["zipCode"];
            $_SESSION["city"] = $user["city"];
            $_SESSION["mail"] = $user["mail"];
            $_SESSION["lastName"] = $user["lastName"];
            $_SESSION["firstName"] = $user["firstName"];
            $_SESSION["orderDate"] = $user["orderDate"];
            $_SESSION["role"] = $user["role"];
            $_SESSION["logged"] = TRUE;

            $http->redirectTo("/");
        }

        else{
            $erreur = "Mot de passe incorrect";
        }

        return ["erreur"=>$erreur];

    }
}