<?php

$conn = require_once('../Connection/dbconnection.php');
$conn2 = include_once("../Connection/homeFeedConnection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userEmail = $_POST['email'];
    $name = $_POST['username'];
    $userPassword = $_POST['password'];
    $hash = password_hash($userPassword, PASSWORD_DEFAULT);

    $stmt2 = $conn->prepare('SELECT * FROM data WHERE email = ?');
    $stmt2->bind_param('s', $userEmail);
    $stmt2->execute();
    $user = $stmt2->fetch();

    if($user){
        header("Location: ../Register/register.php?error=email_exists");
        $stmt2 -> close();
        $conn -> close();   
    }else{
        $defaultUser = '../Images/defaultprofile.png';
        $defaultimage = '../Images/plantdef.jpg';
        $stmt = $conn -> prepare('INSERT INTO data (email, username, password, userPic, defaultPic) VALUES (?, ?, ?, ?, ?)');
        $stmt -> bind_param('sssss', $userEmail, $name, $hash,$defaultUser,$defaultimage);

        $stmt -> execute();
        echo 'Record added';


        header('Location: ../Login/login.php');

        $stmt -> close();
        $stmt2 -> close();
        $conn -> close();

    }
}