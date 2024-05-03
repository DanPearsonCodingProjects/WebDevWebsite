<?php
        $conn = require('../Connection/homeFeedConnection.php');

        $sql = "SELECT * FROM postsData";
        $stmt = $conn->prepare('SELECT * FROM postsData');
        $stmt->execute();
        $result = $stmt->get_result();
        $connection = require('../Connection/dbconnection.php');

        $profilePicQuery = "SELECT userPic FROM data WHERE id = ?";
        $profilePicStmt = $connection->prepare($profilePicQuery);
        $profilePicStmt->bind_param('i', $_COOKIE['id']);
        $profilePicStmt->execute();
        $profilePicResult = $profilePicStmt->get_result();
        $profilePicData = $profilePicResult->fetch_assoc();


        $conn1 = require('../Connection/homeFeedConnection.php');
        $insertQuery = "UPDATE postsData SET profilePic = ? WHERE userId = ?";
        $insertStmt = $conn1->prepare("UPDATE postsData SET profilePic = ? WHERE userID = ?");
        $insertStmt->bind_param('si', $profilePicData['userPic'], $_COOKIE['id']);
        $insertStmt->execute();

        // Fetch all posts into an array
        $postsArray = array();
        while ($postData = $result->fetch_assoc()) {
            $postsArray[] = $postData;
        }

        // Reverse the order of the posts array
        $reversedPostsArray = array_reverse($postsArray);

        // Iterate through the reversed array to display posts
        foreach ($reversedPostsArray as $postData) {

            echo '<div class="post">';
            echo '<div class="banner">';
            $imageData1 = $postData['profilePic'];
            echo "<img src='{$imageData1}' alt='Image'>";
            echo "<h4>{$postData['usersName']}</h4>";
            echo '</div>';

            echo '<div class="images">';

            $postImage = '../FeedImages/'.$postData['postImage'];
            echo "<img src='{$postImage}' alt='Image'>"; //This is for the posts picture
            echo '</div>';
            if (!file_exists($postImage)) {
                echo "<p>Error: Image not found at '{$postImage}'</p>";
            }

            echo '<div class="TextValue">';
            echo "<h4>{$postData['textVal']}</h4>";
            echo '</div>';
            
            echo '</div>';
        }
        
?>