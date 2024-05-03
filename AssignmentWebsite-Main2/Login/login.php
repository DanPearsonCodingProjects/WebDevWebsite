<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Styles/loginCSS.css" rel="stylesheet">
    <link href="../Styles/homeFeedCSS.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="containHeader">
            <a href="../Main/main.php">Plants 4 You</a> 
            <div class="signUP">
                <a href="../Register/register.php">Register</a>
                <a href="../Login/login.php">Login</a>
            </div>

        </div>
    </header>

    <div class="loginMain">

        <h3>Login</h3>
        
        <form action="loginhandle.php" method="post">
            
            <label for="loginUsername">Username</label>
            <input type="text" name="loginUsername" placeholder="Enter Username">

            <label for="loginPassword">Password</label>
            <input type="password" name="loginPassword" placeholder="Enter Password">
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>