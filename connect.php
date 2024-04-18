<?php
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database = 'Frontend_Bootcamp';

    //Create connection
    $conn = new mysqli($host_name, $user_name, $password, $database);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
