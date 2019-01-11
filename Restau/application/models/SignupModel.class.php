<?php

class SignupModel{
    function newMember($lastName, $firstName, $birthdayDate, $address, $city, $zipCode, $phone, $mail, $password){
        $database = new Database();

        //insertion d'un nouvel utilisateur
        $database->executeSql("INSERT INTO users (lastName, firstName, birthdayDate, address, city, zipCode, phone, mail, password, creationTime) VALUES (?,?,?,?,?,?,?,?,?,NOW())", [$lastName, $firstName, $birthdayDate, $address, $city, $zipCode, $phone, $mail, $password]);


    }
}
