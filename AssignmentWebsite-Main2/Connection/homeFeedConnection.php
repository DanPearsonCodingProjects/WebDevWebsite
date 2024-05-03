<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "postInfo";
$conn1 = new mysqli($servername, $username, $password, $database);

if($conn1->connect_error){
    die("Connection Failed". $conn->connect_error);
}

return $conn1;
