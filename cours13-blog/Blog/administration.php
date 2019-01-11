<?php

// vous connecter a la base
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->exec("SET NAMES UTF8");

$query = $pdo->prepare("SELECT Post.Id, Title, Contents, CreationTimestamp, FirstName, Name FROM Post INNER JOIN Author ON Author.Id = Post.Author_Id INNER JOIN Category ON Category.Id = Post.Category_Id");

$query->execute();

$posts = $query->fetchAll(PDO::FETCH_ASSOC);

 include "administration.phtml";

?>