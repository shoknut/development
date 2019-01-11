<?php

class ValidationModel{


    function validation($id){
        $database = new Database();

        $validation = $database->query("SELECT Photo, Name, quantityOrdered, priceEach, orders.totalPrice, id_user, orders.order_id 
                              FROM Meal
                              INNER JOIN orderDetail ON orderDetail.meal_id = Meal.id
                              INNER JOIN orders ON orders.order_id = orderDetail.order_id
                              WHERE orders.order_id = ?", [$id]);

        return $validation;

    }
}
