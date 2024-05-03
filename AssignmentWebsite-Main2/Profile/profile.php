<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/homefeedCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="../Styles/accountMainCSS.css">
</head>
<body>

 
    <header>
        <div class="containHeader">
            <a href="../Main/main.php">Plants 4 You</a> 
            <a href="">Profile</a>
        </div>
    </header>
    <div class="mainSidebar">
                <h2>Dan's Profile</h2>
                <div class="aSelect">
                    <img src="../Images/line-md--account.svg" alt="">
                    <a href="" id="account">Account</a>
                    
                </div>
                <div class="aSelect">
                    <img src="../Images/mdi--post-outline.svg" alt="">
                    <a href="../Feed/homeFeed.php">Feed</a>
                </div>

                <div class="aSelect">
                    <img src="../Images/charm--plant-pot.svg" alt="">
                    <a href="../Account/accountMain.php">My Plants</a>
                </div>

                <div class="aSelect">
                    <img src="../Images/ic--outline-logout.svg" alt="">
                    <a href="">Log Out</a>
                </div>
         
    </div>


    <div class="userInfo">
        <?php
        include('profileHandle.php');
        ?>
    </div>
    
</body>
</html>