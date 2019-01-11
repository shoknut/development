<?php

$pdo = new PDO("mysql:host=localhost;dbname=blog","root","troiswa");
$pdo->exec("SET NAMES UTF8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    $key = $_GET["keys"];
    // Récupération de tous les articles du blog classés par ordre antéchronologique.
    if ($key != "all"){
    $query = $pdo->prepare(
    '
        SELECT
            Post.Id,
            Title,
            Contents,
            CreationTimestamp,
            FirstName,
            LastName
        FROM
            Post
        INNER JOIN
            Author
        ON
            Post.Author_Id = Author.Id
       WHERE Title LIKE ?
    ');
        $query->execute([$key."%"]);

    }
    $posts = $query->fetchAll();
    echo json_encode($posts);