<?php

$conn1 = include_once('../Connection/dbconnection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Recieved";
    $stmt = $conn1 -> prepare('DELETE FROM data WHERE id = ?');
    $stmt->bind_param('i',$_COOKIE['id']);
    $stmt->execute();
    if ($stmt->errno) {
        echo "Error: " . $stmt->error;
    } else {
        // Check if the update was successful
        if ($stmt->affected_rows > 0) {
            echo "Success";
        } else {
            echo "No rows were deleted. Maybe the user with that ID doesn't exist.";
        }
    }
}
