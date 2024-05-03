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






$createTableSql = "CREATE TABLE IF NOT EXISTS postsdata(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userID INT(11),
    usersName VARCHAR(255) NOT NULL,
    textVal VARCHAR(300) NOT NULL,
    postType VARCHAR(155) NOT NULL,
    postImage BLOB,
    profilePic BLOB
)"; 

if($conn1->query($createTableSql)){
    return $conn1;
}else{
    echo "Error getting home feed data";
}


return $conn1;

