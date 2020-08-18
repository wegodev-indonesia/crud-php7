<?php

    $server   = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'perusahaan';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    }
    catch(PDOException $e) {
        echo 'Koneksi gagal: ' . $e->getMessage();
    }