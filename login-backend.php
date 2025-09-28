<?php
error_reporting(0);
session_start();

// Set content type for JSON response
header('Content-Type: application/json');

// Function to check demo credentials
function checkDemoCredentials($email, $password) {
    $demo_users = [
        'admin@gmail.com' => ['role' => 'admin', 'id' => 'A9876543210'],
        'teacher@gmail.com' => ['role' => 'teacher', 'id' => 'T1718791191'],
        'student@gmail.com' => ['role' => 'student', 'id' => 'S1718791292'],
        'owner@gmail.com' => ['role' => 'owner', 'id' => 'O7898987845']
    ];
    
    if (isset($demo_users[$email]) && $password === '19062024') {
        $_SESSION['uid'] = $demo_users[$email]['id'];
        return [
            'status' => 'success',
            'role' => $demo_users[$email]['role'],
            'debug_mode' => 'demo',
            'debug' => 'Demo mode login successful'
        ];
    }
    return false;
}

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     http_response_code(404);
     die();
}else{
    
    
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Debug: Log the received credentials
    $received_email = $_POST['email'];
    $received_password = $_POST['password'];
    error_log("Login attempt - Email: '$received_email', Password: '$received_password'");
    
    try {
        include("assets/config.php");
    } catch (Exception $e) {
        $response['status'] = 'error';
        $response['message'] = 'Database connection failed';
        echo json_encode($response);
        exit;
    }

    // Force demo mode for now since database might not have users
    $response['debug_mode'] = 'demo';
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $demo_success = checkDemoCredentials($email, $password);
    if ($demo_success) {
        $response = $demo_success;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email or password!';
        $response['debug'] = "Demo mode - Email: $email, Password: $password, Expected: 19062024";
    }

    
} else {
    $response['status'] = 'error';
    $response['message'] = 'Both fields are required';
}

// Return the response
echo json_encode($response);
    
}

?>
