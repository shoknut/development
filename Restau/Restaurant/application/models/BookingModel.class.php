<?php


class BookingModel{
    function insertBooking($date, $time, $couvert){
        $database = new Database();

        $sql = "INSERT INTO Booking (BookingDate, BookingTime, NumberOfSeats, User_id, CreationTimestamp) VALUES (?,?,?,?,NOW())";

        $database->executeSql($sql, [$date, $time, $couvert, $_SESSION["id"]]);
    }
}