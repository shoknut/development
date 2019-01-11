<?php

include "bdd.php";

$article = $_GET["numeroArticle"];
//ADD COMMENT
$query = $pdo->prepare("INSERT INTO comment (nickname,content,post_id,creationTime)
						VALUES (?,?,?,NOW())");

$query->execute([$_POST["pseudo"], $_POST["commentaire"],$article]);


header("Location:article.php?numeroArticle=".$article);

?>