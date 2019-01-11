<?php

include "bdd.php";

$article = $_GET["numeroArticle"];

//récupération du post
$query = $pdo->prepare("SELECT post.id,title,content,creationTime, lastName,firstName,name 
						FROM `post`
						INNER JOIN author
						ON post.author_id=author.id
						INNER JOIN category
						ON author.id=category.id
						WHERE post.id=?");

$query->execute([$article]);

$post = $query->fetch(PDO::FETCH_ASSOC);

//récupération des commentaires

$query = $pdo->prepare("SELECT post.id, post_id,nickname, comment.content, comment.creationTime
						FROM comment
						INNER JOIN post ON post.id=comment.post_id
						WHERE post.id = ?");

$query->execute([$article]);

$comments = $query->fetchAll(PDO::FETCH_ASSOC);


include "article.phtml";

?>