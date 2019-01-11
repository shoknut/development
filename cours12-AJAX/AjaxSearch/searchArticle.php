<?php

    include 'application/bdd_connection.php';

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
    }if ($key == "all"){
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
    ');     
           $query->execute();
    }
    $posts = $query->fetchAll();
    echo json_encode($posts);