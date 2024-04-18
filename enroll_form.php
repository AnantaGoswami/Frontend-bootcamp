<?php

// echo 'heya!' ;
include("connect.php"); //database connection

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
// echo $first_name;

$sql = "insert into enroll_tbl (first_name, last_name, email, phone) values ('$first_name', '$last_name', '$email', '$phone')";
$result = mysqli_query($conn,$sql);
echo '<script> alert("Enrollment Successful! We will get back to you soon! "); </script>';
echo '<script> location.replace("index.php"); </script>';
