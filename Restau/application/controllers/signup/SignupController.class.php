<?php
// chaque page est une classe objet PHP
class SignupController
{
    // si je viens d'un lien OU d'un requete ajax, je passe dans cette fonction
    // HTTP -> contient toutes les informations sur la page demandée , la requete HTTP
    // cette classe HTTP contient la fonction de redirection
    // $queryFields = $_GET
    public function httpGetMethod(Http $http, array $queryFields)
    {


    }

    // si je viens d'un formulaire submit, je passe dans cette fonction
    // HTTP voir plus haut
    // $formFields = $_POST
    public function httpPostMethod(Http $http, array $formFields){
        $signUpModel = new SignupModel();
        $signUpModel->newMember(
            $formFields["lastName"],
            $formFields["firstName"],
            $formFields["year"]."-".$formFields["month"]."-".$formFields["day"],
            $formFields["address"],
            $formFields["city"],
            $formFields["zipCode"],
            $formFields["phone"],
            $formFields["mail"],
            password_hash($formFields["password"],PASSWORD_DEFAULT));

        $http->redirectTo("/");
    }
}