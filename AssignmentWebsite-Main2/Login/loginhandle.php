<?php
$conn = include_once("../Connection/dbconnection.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];
    $stmt = $conn->prepare('SELECT * FROM data WHERE username = ?');
    $stmt->bind_param('s', $loginUsername);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $userData = $result->fetch_assoc();
        if(password_verify($loginPassword, $userData['password'])){
            echo'User verified';
            $cookie_name = "User";
            $coookie_value = "Verified";
            setcookie($cookie_name, $coookie_value, time() + 30,"/");
            
            $cookie_name2 = "id";
            $val = $userData["id"];
            setcookie($cookie_name2, $val, time() + 3000,"/");


            header("Location: ../Feed/homeFeed.php");
        }else{
            header("Location: ../Login/login.php?error=user_not_found");

        }
    }else{
        header("Location: ../Login/login.php?error=user_not_found");
    }

}