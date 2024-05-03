<?php
// URL of the PHP file you want to send the GET request to
$url = 'http://localhost/AssignmentWebsite-Main2/AssignmentWebsite-Main2/Profile/profileAPI.php';

// Add any parameters you want to send in the GET request
echo "Cookie";
echo $_COOKIE['id'];



$params = array(
    'userID' => $_COOKIE['id'],
);


$postData = json_encode($params,true);
// Append parameters to the URL
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postData
    )
);

// Create context
$context = stream_context_create($options);

// Make HTTP POST request and get API response
$apiResponse = file_get_contents($url, false, $context);

// Decode JSON response
$responseData = json_decode($apiResponse, true);

// Output the array using print_r()
echo $apiResponse;

// or Output the array using var_dump()
// var_dump($responseData);
?>
