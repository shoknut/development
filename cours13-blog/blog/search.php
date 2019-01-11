<?php
include "bdd.php";

	$key = $_GET['keys'];

	
	    $query = $pdo->prepare("SELECT * FROM post WHERE title LIKE ?");

	    $query->execute([$key."%"]);

	    $search = $query->fetchAll(PDO::FETCH_ASSOC);

	    echo json_encode($search);




?>	