<?php

class DisconnectController{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();

        session_destroy();

        $_SESSION = [];

        $http->redirectTo("/login");

    }

}