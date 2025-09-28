<?php
// Generate an RTF file for School Management System Documentation

// Set headers for RTF file download
header("Content-Type: application/rtf");
header("Content-Disposition: attachment; filename=school_management_system_documentation.rtf");
header("Pragma: no-cache");
header("Expires: 0");

// Read the text version of the documentation
$text_content = file_get_contents('school_management_system_documentation.txt');

// Convert text to RTF format
$rtf_content = convertTextToRtf($text_content);

// Output the RTF content
echo $rtf_content;
exit;

function convertTextToRtf($text) {
    // Basic RTF header
    $rtf = "{\\rtf1\\ansi\\deff0\n";
    
    // Add formatting commands
    $rtf .= "{\\b\\fs48 SCHOOL MANAGEMENT SYSTEM DOCUMENTATION}\\par\n";
    $rtf .= "\\fs24 \\par\n";
    
    // Process each line of the text
    $lines = explode("\n", $text);
    foreach ($lines as $line) {
        // Skip the first line since we already added the title
        if (trim($line) == "SCHOOL MANAGEMENT SYSTEM DOCUMENTATION" || trim($line) == "=====================================") {
            continue;
        }
        
        // Add bold formatting for section headers
        if (strpos($line, "PROJECT OVERVIEW") !== false || 
            strpos($line, "KEY FEATURES") !== false || 
            strpos($line, "TECHNICAL STACK") !== false || 
            strpos($line, "USER ROLES") !== false || 
            strpos($line, "SYSTEM MODULES") !== false || 
            strpos($line, "SETUP & INSTALLATION") !== false || 
            strpos($line, "RECENT IMPROVEMENTS") !== false) {
            $rtf .= "{\\b\\fs28 " . addslashes($line) . "}\\par\n";
        }
        // Add bold formatting for subsection headers
        elseif (strpos($line, "----------------") !== false) {
            $rtf .= "{\\b " . addslashes($line) . "}\\par\n";
        }
        // Add bold formatting for list items that are headers
        elseif (preg_match('/^[A-Z][^:]*:$/', trim($line))) {
            $rtf .= "{\\b " . addslashes($line) . "}\\par\n";
        }
        // Regular text
        else {
            $rtf .= addslashes($line) . "\\par\n";
        }
    }
    
    // Close RTF
    $rtf .= "}";
    
    return $rtf;
}
?>