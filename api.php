<?php
header("Content-Type: application/json");

// Check if a specific query parameter is set
if (isset($_GET['response'])) {
    $response = $_GET['response'];
    // Validate the response to ensure it is either "y" or "n"
    if ($response === 'yes') {
        $message = 'Your account has been reactivated.';
    } elseif ($response === 'no') {
        $message = 'Your account failed to reactivate.';
    } else {
        $message = 'Invalid response. Please use "true" or "false".';
    }
} else {
    // Default response when the query parameter is not set
    $message = 'Please provide a "response" query parameter with value "yes" or "no".';
}

// Output the response as JSON
echo json_encode(["message" => $message]);
?>
