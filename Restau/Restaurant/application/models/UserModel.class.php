<?php


class UserModel
{
    // cette fonction servira à insérer un user sur la base
    function insertUser($firstName, $lastName, $email, $password, $birthdate, $address, $city, $zipcode, $country, $phone){
        $database = new Database();

        $sql = "INSERT INTO User (FirstName, LastName, Email, Password, BirthDate, Address, City, ZipCode, Country, Phone, CreationtimeStamp) VALUES (?,?,?,?,?,?,?,?,?,?,NOW())";

        $database->executeSql($sql, [$firstName, $lastName, $email, $password, $birthdate, $address, $city, $zipcode, $country, $phone]);
    }

    function getUser($email, $password){
        $database = new Database();

        $user = $database->queryOne("SELECT * FROM User WHERE Email = ?", [$email]);

        // vérifions que user existe bien
        if($user){
            if(password_verify($password, $user["Password"])){
                session_start();
                $_SESSION["id"] = $user["Id"];
                $_SESSION["firstName"] = $user["FirstName"];
                $_SESSION["LastName"] = $user["LastName"];
                $_SESSION["Address"] = $user["Address"];
                $_SESSION["City"] = $user["City"];
                $_SESSION["Phone"] = $user["Phone"];
            }else{
                echo "Mot de passe incorrect";
            }
        }else{
            echo "Email incorrect";
        }
        return $user;
    }
}