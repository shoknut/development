<?php

class ValidateController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        // je fais un ajax POST, donc j'arrive dans cette fonction

        session_start();

        $orderModel = new OrderModel();
        // je stocke le lastInsertID de la commande que je viens d'insérée
        $id = $orderModel->insertOrder($formFields["totalAmount"]);

        foreach($formFields["panier"] as $repas){
            $orderModel->insertOrderLine($repas["Id"],$repas["quantity"], $id, $repas["SalePrice"]);
        }


        $http->sendJsonResponse($id);
    }
}