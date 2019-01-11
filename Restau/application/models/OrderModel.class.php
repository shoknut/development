<?php

class OrderModel{


    function orders($totalPrice){
        $database = new Database();

        return $database->executeSql("INSERT INTO orders (id_user, orderDate, totalPrice) VALUES(?,NOW(),?)", [$_SESSION["id"], $totalPrice]);

    }

    function orderDetail($meal_id, $quantityOrdered, $priceEach, 	$order_id){
        
        $database = new Database();
        
         $database->executeSql("INSERT INTO orderDetail (meal_id, quantityOrdered, priceEach, order_id) VALUES (?,?,?,?)", [$meal_id, $quantityOrdered, $priceEach, $order_id]);

    }
}
