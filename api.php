<?php
header("Content-Type: application/json");

// Check if a specific query parameter is set
if (isset($_GET['flag'])) {
    $flag = $_GET['flag'];
    // Validate the flag to ensure it is either "y" or "n"
    if ($flag === 'true') {
        $message = 'Your account has been reactivated.';
    } elseif ($flag === 'false') {
        $message = 'Your account failed to reactivate.';
    } else {
        $message = 'Invalid flag. Please use "true" or "false".';
    }
} else {
    // Default response when the query parameter is not set
    $message = 'Please provide a "flag" query parameter with value "true" or "false".';
}

// Output the response as JSON
echo json_encode(["message" => $message]);
?>
