<?php

    $hostname = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "restaurant";

    $conn = new mysqli($hostname, $userName, $password, $dbName); // OOP connection (its a class)

    // $connection = mysqli_connect($hostname, $userName, $password, $dbName); //procedual connection

    if($conn->connect_error) {
        die("connection failed " . $conn->connect_error);
    }