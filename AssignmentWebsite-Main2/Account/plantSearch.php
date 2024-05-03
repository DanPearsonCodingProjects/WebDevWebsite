<?php

$allPlantNames = array("Rose", "Lily", "Sunflower", "Tulip", "Daisy");


$searchTerm = $_GET['term'];


$matchingPlants = array_filter($allPlantNames, function($plant) use ($searchTerm) {
    return stripos($plant, $searchTerm) !== false;
});


$matchingPlants = array_values($matchingPlants);


$results = array_map(function($plant) {
    return ['id' => $plant, 'text' => $plant];
}, $matchingPlants);

echo json_encode($results);
