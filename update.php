<?php

    include_once('connection.php');

    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $statement = $conn->prepare('UPDATE users SET name=:name,
                                                email=:email,
                                                phone=:phone
                                                WHERE id=:id');                            
    $statement->execute([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'id' => $id
    ]);

    header('location: index.php');