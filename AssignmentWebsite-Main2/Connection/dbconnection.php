<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // SQL to check if the table exists
// $tableName = "data";
// $sql = "SHOW TABLES LIKE '$tableName'";
// $result = $conn->query($sql);

// // If table does not exist, create it

$tableSQL = "CREATE TABLE IF NOT EXISTS data(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email TEXT NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    userPic BLOB,
    defaultPic BLOB    
)";

if($conn->query($tableSQL)){
    //Table Successful
    return $conn;
}else{
    echo "error creating table";
}

return $conn;


?>
