<?php
// chaque page est une classe objet PHP
class BookingController
{
    // $queryFields = $_GET
    public function httpGetMethod(Http $http, array $queryFields)
    {
    }
    // $formFields = $_POST
    public function httpPostMethod(Http $http, array $formFields)
    {
        $bookingModel = new BookingModel();
        session_start();
        $bookingModel->booking(
            $formFields["year"]."-".$formFields["month"]."-".$formFields["day"],
            $formFields["hour"].":".$formFields["minutes"],
            $formFields["nb"]);


    $http->redirectTo("/");

    }
}