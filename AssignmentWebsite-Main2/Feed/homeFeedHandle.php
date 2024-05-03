<?php

$conn1 = include_once("../Connection/homeFeedConnection.php");
$conn2 = include_once("../Connection/dbconnection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if 'id' cookie is set
    if (isset($_COOKIE['id'])) {
        $usersname = $_COOKIE['id'];
        $text = $_POST['text1'];
        $type = $_POST['postType'];

        $file_name = $_FILES['filename']['name'];
        $tempname = $_FILES['filename']['tmp_name'];
        $folder = '../Feedimages/'.$file_name;

        if(move_uploaded_file($tempname, $folder)){
            echo "'Uploaded";
        }else{
            echo "Not uploaded";
        }

        $stmt3 = $conn2->prepare('SELECT username FROM data WHERE id = ?');
        $stmt3->bind_param('s', $usersname);

        $stmt3->execute();

        $result3 = $stmt3->get_result();

        if ($result3->num_rows > 0) {
            while ($row = $result3->fetch_assoc()) {
                // Access the username from the $row array
                $username = $row['username'];
                $stmt4 = $conn1->prepare('INSERT INTO postsdata (userID,usersName,textVal,postType,postImage) VALUES (?, ?, ?, ?, ?) ');
                $stmt4->bind_param('sssss', $_COOKIE['id'],$username, $text,$type,$file_name);
                $stmt4->execute();
                $stmt4 -> close();
                header('Location: homeFeed.php');
            }
        } else {
            echo "No results found.";
        }

        $stmt3->close();
        $conn2->close();
    } else {
        echo "Cookie 'id' not set.";
    }
}
