<?php

    include_once('connection.php');

    $id = $_GET['id'];

    $statement = $conn->prepare('DELETE FROM users WHERE id=:id');                             
    $statement->execute([
        'id' => $id
    ]);

    header('location: index.php');