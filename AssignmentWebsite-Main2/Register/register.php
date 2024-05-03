<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../Styles/style.css" >
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="containHeader">
            <a href="../Main/main.php">Plants 4 You</a>
            <div class="aRef">
                <a href="../Login/login.php">Login</a>
                
            </div>
        </div>

    </header>
    <div class="gridContainer">
        <div class="container3">
            <h4>What to expect</h4>

            <ul>
                <li>Post to feed</li>
                <li>Explore a range of plants</li>
                <li>Get inspiration</li>
                <li>Care tips for your plants</li>
                <li>Keep track of your plants</li>
            </ul>

            <img src="logo.png" alt="">
            
        </div>
        <div class="container">
            <h3>Register</h3>
            <form action="registerhandle.php" method='post'>
                <input type="text" name="email" placeholder="Enter email">
                <input type="text" name="username" placeholder="Enter username">
                <input type="password" name="password" placeholder="Enter password">
    
                <button type="submit">Register</button>
            </form>
        </div>

        <div class="container2">
            <h4>Already have an account?</h4>
            <a href="">Login</a>
        </div>


    </div>


    
</body>
</html>