<?php
    $host_name = 'sql302.infinityfree.com';
    $user_name = 'if0_36385408';
    $password = 'xwT6WSRyn14';
    $database = 'if0_36385408_frontend_bootcamp';

    //Create connection
    $conn = new mysqli($host_name, $user_name, $password, $database);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
