<?php

    include_once('connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $statement = $conn->prepare('INSERT INTO users (name, email, phone)
                                            VALUES (:name, :email, :phone)');
                                
    $statement->execute([
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ]);

    header('location: index.php');