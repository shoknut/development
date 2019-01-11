<?php
// chaque page est une classe objet PHP
class RecapController
{
    // $queryFields = $_GET
    public function httpPostMethod(Http $http, array $formFields)
    {
        session_start();

        $panier = $formFields["panier"];
        // récupération totalValue depuis le $.post dans JS
        $totalValue = $formFields["totalValue"];

        $orders = new OrderModel();

            // on insere la commande
        $id = $orders->orders($totalValue);

            // on insere les détails de la commande
        foreach ($panier as $element){
            $orders->orderDetail($element["id"], $element["quantity"], $element["SalePrice"], $id);
        }

        $http->sendJsonResponse($id);

    }

}