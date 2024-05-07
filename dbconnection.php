<?php 
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "krify";


    $connection = new mysqli ($localhost,$username,$password,$database);

    if ($connection->connect_error)  {
        die( "connection failed" .$connection->connect_error);
    }
    ?>


