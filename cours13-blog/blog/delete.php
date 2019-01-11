<?php

include "bdd.php";

$delete = $_GET["numeroArticle"];

$query = $pdo->prepare("DELETE
						FROM `post` 
						WHERE id=?");

$query->execute([$delete]);

header("Location:admin.php");


?>