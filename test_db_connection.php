<?php
include("assets/config.php");

if ($conn) {
    echo "Database connection successful!\n";
    
    // Test query to fetch teachers
    $sql = "SELECT COUNT(*) as count FROM teachers";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "Number of teachers in database: " . $row['count'] . "\n";
    } else {
        echo "Error querying teachers table: " . mysqli_error($conn) . "\n";
    }
    
    // Test query to fetch classes
    $sql = "SELECT COUNT(*) as count FROM classes";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "Number of classes in database: " . $row['count'] . "\n";
    } else {
        echo "Error querying classes table: " . mysqli_error($conn) . "\n";
    }
} else {
    echo "Database connection failed!\n";
}
?>