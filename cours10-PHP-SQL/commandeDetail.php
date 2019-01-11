<?php
//connexion à la base de données SQL
$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', "root","troiswa");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET NAMES UTF8");

//je récupère la variable d'url
$nbCommande = $_GET["numeroCommande"];

//je fais la requete client
$query = $pdo->prepare(
"SELECT orders.orderNumber, orders.customerNumber, customerName, contactLastName, contactFirstName,addressLine1,city,addressLine2
FROM `orders`
INNER JOIN customers ON customers.customerNumber = orders.customerNumber
INNER JOIN orderdetails ON orderdetails.orderNumber = orders.orderNumber
WHERE orders.orderNumber=?
GROUP BY orders.orderNumber, customerNumber");

$query->execute([$nbCommande]);

$client = $query->fetch(PDO::FETCH_ASSOC);

//je fais la requete détail de la commande
$query = $pdo->prepare("
SELECT productName, quantityOrdered, priceEach, (quantityOrdered*priceEach) AS totalPrice
FROM `products`
INNER JOIN orderdetails ON products.productCode = orderdetails.productCode
WHERE orderdetails.orderNumber = ?");

$query->execute([$nbCommande]);
$detailCommande = $query->fetchAll(PDO::FETCH_ASSOC);

//je calcul le montant total de la commande


include "commandeDetail.phtml";


?>