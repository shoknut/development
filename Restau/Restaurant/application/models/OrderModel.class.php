<?php


class OrderModel{
    function insertOrder($totalAmount){
        $database = new Database();

        $sql = "INSERT INTO Orders (User_Id, TotalAmount, TaxRate, TaxAmount, CreationTimestamp, CompleteTimestamp) VALUES (?,?,20,?,NOW(),NOW())";
        return $database->executeSql($sql, [$_SESSION["id"], $totalAmount, $totalAmount*0.2]);
    }

    function insertOrderLine($idMeal, $quantity, $orderID, $price){
        $database = new Database();

        $sql = "INSERT INTO OrderLine (QuantityOrdered, Meal_Id, Order_Id, PriceEach) VALUES(?,?,?,?)";

        $database->executeSql($sql, [$quantity, $idMeal, $orderID, $price]);
    }

    function getOrder($id){
        $database = new Database();

        $sql = "SELECT * FROM Orders INNER JOIN OrderLine ON Orders.Id = OrderLine.Order_Id INNER JOIN Meal ON Meal.Id = OrderLine.Meal_Id WHERE Orders.id = ?";

        return $database->query($sql, [$id]);
    }
}