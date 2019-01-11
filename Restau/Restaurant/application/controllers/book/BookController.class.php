<?php

class BookController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        // j'arrive ici quand j'poste le contenu de ma réservation
        session_start();

        $bookModel = new BookingModel();

        $bookModel->insertBooking($formFields["year"]."-".$formFields["month"]."-".$formFields["day"], $formFields["hours"].":".$formFields["minutes"], $formFields["couvert"]);
    }
}