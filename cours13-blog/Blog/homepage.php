<?php

// vous connecter a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");

$pdo->exec("SET NAMES UTF8");

// faire un select de tout les Posts sur la table post
$query = $pdo->prepare("SELECT Post.id, Title, Contents, CreationTimestamp FROM Post INNER JOIN Author ON Author.Id = Author_Id");

$query->execute();

$posts = $query->fetchAll(PDO::FETCH_ASSOC);

 include "homepage.phtml";

?>