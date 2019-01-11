<?php
//connexion a la bdd
$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', "root", "troiswa");
$pdo->exec("SET NAMES UTF8");

//execution du code
$key = $_GET['keys'];
if($key != ""){
    $query = $pdo->prepare("SELECT * FROM products WHERE productName LIKE ?");

    $query->execute([$key."%"]);

    $search = $query->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($search);
}


?>