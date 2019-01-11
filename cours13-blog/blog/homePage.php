<?php

include "bdd.php";


$query = $pdo->prepare("SELECT post.id,title,content,creationTime, lastName,firstName,name 
						FROM `post`
						INNER JOIN author
						ON post.author_id=author.id
						INNER JOIN category
						ON author.id=category.id");

$query->execute();

$posts = $query->fetchAll(PDO::FETCH_ASSOC);

include "homePage.phtml";

?>