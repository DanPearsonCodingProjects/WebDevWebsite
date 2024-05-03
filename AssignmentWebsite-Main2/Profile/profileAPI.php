<?php
// Ensure that the cookie containing the user's ID is set and accessible

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user ID from the request body
    $postdata = file_get_contents('php://input');
    $request = json_decode($postdata, true);
    $userID = $request['userID'];
    
    // Include database connection
    $conn = include_once('../Connection/dbconnection.php');

    // Fetch user data from the database based on the user's ID
    $stmt = $conn->prepare('SELECT email, username FROM data WHERE id = ?');
    $stmt->bind_param('s', $userID); // Assuming id is a string
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Fetch the first row
        $userData = $result->fetch_assoc();

        // Close the prepared statement
        $stmt->close();

        // Close the database connection
        $conn->close();

        // Return the user data as JSON
        header('Content-Type: application/json');
        echo json_encode($userData);
    } else {
        // No user found with the given ID
        echo json_encode(array("error" => "User not found"));
        $stmt->close();
        $conn->close();
        exit();
    }
}
?>
