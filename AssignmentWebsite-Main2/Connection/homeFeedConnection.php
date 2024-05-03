<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "postInfo";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}

return $conn1;
// SQL to check if the table exists
// $tableName = "postsData";
// $sql = "SHOW TABLES LIKE '$tableName'";
// $result = $conn1->query($sql);

// // If table does not exist, create it
// if ($result->num_rows == 0) {
//     $createTableSql = "CREATE TABLE $tableName (
//         id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         userID INT(11),
//         usersName VARCHAR(255) NOT NULL,
//         textVal VARCHAR(300) NOT NULL,
//         postType VARCHAR(155) NOT NULL,
//         postImage BLOB,
//         profilePic BLOB
//     )";
//     // Execute the SQL query to create the table
//     if ($conn->query($createTableSql) === TRUE) {
//         // Table created successfully
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
// }



