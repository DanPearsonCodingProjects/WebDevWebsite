<?php

$conn = include_once('../Connection/dbconnection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $changedName = $_POST['NameChange'];
    $user = $_COOKIE['id'];
    $stmt = $conn -> prepare('UPDATE data SET username = ? WHERE id = ?');
    $stmt->bind_param('si',$changedName,$user);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        header('Location: profile.php');
    } else {
        echo "Update failed! Please go refresh the site";
    }
}
