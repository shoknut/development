<?php
    class BookingModel{
        function booking($dateBook, $timeBook, $nbPeople){
            $database = new Database();
            
            $booking = $database->executeSql("INSERT INTO booking (id_user, dateBook, timeBook, nbPeople , creationTime) VALUES (?,?,?,?,NOW())", [$_SESSION["id"], $dateBook, $timeBook, $nbPeople]);
        }
}


//lorsqu'on utilise le $_SESSION dans le model, NE PAS OUBLIER de faire une session_start() dans le controller