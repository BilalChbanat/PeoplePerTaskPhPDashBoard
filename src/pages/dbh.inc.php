<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'peoplepertask';


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}


// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error($conn));
// }