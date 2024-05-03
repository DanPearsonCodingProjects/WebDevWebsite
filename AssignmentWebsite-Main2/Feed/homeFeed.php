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
            <a href="../Profile/profile.php">Profile</a>
        </div>
    </header>
    <div class="mainSidebar">
                <h2>Dan's Profile</h2>
                <div class="aSelect">
                    <img src="../Images/line-md--account.svg" alt="">
                    <a href="../Profile/profile.php" id="account">Account</a>
                    
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
    <div class="mainFeed">

        <div class="imageTemplate">

            <div class="userPost">

                <button type="submit" id="buttonPost" onclick="togglePopup()">Post Something</button>

            </div>

            <div class="content">
                <div class="clicked" onclick="togglePopup()">X</div>

                <form action="homeFeedHandle.php" method="post" enctype="multipart/form-data" class="formClass">

                    <div class="addFile">
                        <input type="file" id="myFile" name="filename" accept="image/* " onchange="fileInputChangeHandler(event)" placeholder="Click to add file">
                        <img id="imagePreview" src="">
                        Click to add file
    
                    </div>

                    
                    


                    <input type="text" placeholder="Enter Text" id="entertext" name="text1">
                    
                    
                    <select name="postType" id="posts" name="postType">
                        <option value="question">Question</option>
                        <option value="fact">Fact</option>
                        <option value="general">General</option>
                    </select>

                    <button type="submit" value="Upload">Post</button>
                </form>
            </div>

            <?php
                include("postFeed.php");
            ?>

            


            
      
            
            
        </div>
    </div>





    <script>
        function togglePopup(){
            $(".content").toggle();
        }

        function fileInputChangeHandler(event) {
            var input = event.target;
            var imagePreview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>



    
</body>
</html>