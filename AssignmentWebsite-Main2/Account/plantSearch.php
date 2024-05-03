<?php
// Replace this with your actual list of plant names
$allPlantNames = array("Rose", "Lily", "Sunflower", "Tulip", "Daisy");

// Get the user input from the AJAX request
$searchTerm = $_GET['term'];

// Filter plant names based on the user input
$matchingPlants = array_filter($allPlantNames, function($plant) use ($searchTerm) {
    return stripos($plant, $searchTerm) !== false;
});

// Reset array keys after filtering
$matchingPlants = array_values($matchingPlants);

// Format the results as JSON
$results = array_map(function($plant) {
    return ['id' => $plant, 'text' => $plant];
}, $matchingPlants);

echo json_encode($results);
