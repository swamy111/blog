<?php
// Serve the HTML documentation as a downloadable file

// Set headers for HTML download
header("Content-Type: text/html");
header("Content-Disposition: attachment; filename=school_management_system_documentation.html");
header("Pragma: no-cache");
header("Expires: 0");

// Read and output the HTML file
readfile('school_management_system_documentation.html');
exit;
?>