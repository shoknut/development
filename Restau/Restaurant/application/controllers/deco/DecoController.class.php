<?php

class DecoController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
        $_SESSION = [];
        session_destroy();
        $http->redirectTo("/");
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    }
}