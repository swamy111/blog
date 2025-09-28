<?php
// Simple test file to debug login credentials
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Login Debug Test</h2>";

// Test the config file
include("assets/config.php");
echo "<p>Database connection: " . ($conn ? "Success" : "Failed") . "</p>";

// Test demo credentials
$demo_users = [
    'admin@gmail.com' => ['role' => 'admin', 'id' => 'A9876543210'],
    'teacher@gmail.com' => ['role' => 'teacher', 'id' => 'T1718791191'],
    'student@gmail.com' => ['role' => 'student', 'id' => 'S1718791292'],
    'owner@gmail.com' => ['role' => 'owner', 'id' => 'O7898987845']
];

$test_email = 'owner@gmail.com';
$test_password = '19062024';

echo "<h3>Testing Demo Credentials:</h3>";
echo "<p>Email: '$test_email'</p>";
echo "<p>Password: '$test_password'</p>";
echo "<p>Email exists in demo users: " . (isset($demo_users[$test_email]) ? "Yes" : "No") . "</p>";
echo "<p>Password matches: " . ($test_password === '19062024' ? "Yes" : "No") . "</p>";

if (isset($demo_users[$test_email]) && $test_password === '19062024') {
    echo "<p style='color: green;'>✓ Demo login should work</p>";
} else {
    echo "<p style='color: red;'>✗ Demo login would fail</p>";
}

// Test if POST data would work
if ($_POST) {
    echo "<h3>POST Data Received:</h3>";
    echo "<p>Email: '" . $_POST['email'] . "'</p>";
    echo "<p>Password: '" . $_POST['password'] . "'</p>";
    echo "<p>Email length: " . strlen($_POST['email']) . "</p>";
    echo "<p>Password length: " . strlen($_POST['password']) . "</p>";
}

?>

<form method="POST">
    <h3>Test Form:</h3>
    <input type="email" name="email" value="owner@gmail.com" placeholder="Email">
    <input type="password" name="password" value="19062024" placeholder="Password">
    <button type="submit">Test</button>
</form>