<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "postinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to check if the table exists
$tableName = "postsdata";
$sql = "SHOW TABLES LIKE '$tableName'";
$result = $conn->query($sql);

// If table does not exist, create it
if ($result->num_rows == 0) {
    $createTableSql = "CREATE TABLE $tableName (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        userID INT(11),
        usersName VARCHAR(255) NOT NULL,
        textVal VARCHAR(300) NOT NULL,
        postType VARCHAR(155) NOT NULL,
        postImage BLOB,
        profilePic BLOB
    )";
} else {
    echo "Table $tableName already exists";
}

$conn->close();

