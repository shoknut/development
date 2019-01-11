<?php

class RecapController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
        $idCommande = $queryFields["numeroCommande"];

        $orderModel = new OrderModel();
        $order = $orderModel->getOrder($idCommande);

        return ["commande"=>$order];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    }
}