<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/homefeedCSS.css">
    <link rel="stylesheet" href="../Styles/accountMainCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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
    <div class="mainContain">
        <div id="yourPlants">
            <h2>Your Plants</h2>
            
        </div>
        <div id="line"></div>
        <div class="plantDetails">
            <button onclick="togglePopup()">X</button>
            <div class="gridDetails">
                <input type="file">
                <select name="plant" id="plantDropdown">
        <!-- Placeholder option for select2 to work properly -->
                    <option></option>
                </select>
              
            </div>
        </div>
    </div>

    <div class="imageList">
        <div class="addPlant">
            <button onclick="togglePopup()">Add a Plant<br>+</button>
        </div>
        <div class="plantBoxes"></div>
    
    </div>



<script>
        function togglePopup(){
            $(".plantDetails").toggle();
        }
</script>


<script>
    $(document).ready(function() {
        // Enable dropdown search with select2 library
        $('#plantDropdown').select2({
            minimumInputLength: 1, // Minimum characters to start searching
            ajax: {
                url: 'plantSearch.php', // PHP file to handle the search
                dataType: 'json',
                delay: 250, // Delay in milliseconds before making the request
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    });
</script>
    
</body>
</html>