<?php
header("Content-Type: application/json");

// Randomly return "yes" or "no"
$response = (rand(0, 1) === 1) ? "yes" : "no";

// Output the response as JSON
echo json_encode(["response" => $response]);
?>
