<?php

class LoginModel
{
    function login($mail, $password){
        $database = new Database();

        //connexion au compte
       $login = $database->queryOne("SELECT * FROM users  INNER JOIN orders ON orders.order_id = users.id WHERE mail = ?", [$mail]);

        if (password_verify($password, $login["password"])) {
            return $login;
        }

    }
}