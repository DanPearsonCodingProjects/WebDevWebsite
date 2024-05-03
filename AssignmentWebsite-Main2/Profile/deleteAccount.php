<?php

$conn = include_once('../Connection/dbconnection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_COOKIE['id'];
    $stmt = $conn -> prepare('DELETE FROM data WHERE id = ?');
    $stmt->bind_param('i',$user);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "Success";
    } else {
        echo "Update failed! Please go refresh the site";
    }
}
