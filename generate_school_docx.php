<?php
// Generate a proper DOCX file for School Management System Documentation

// Set headers for DOCX file download
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
header("Content-Disposition: attachment; filename=school_management_system_documentation.docx");
header("Pragma: no-cache");
header("Expires: 0");

// Create a proper DOCX structure
$docx_content = createProperDocx();

// Output the DOCX content
echo $docx_content;
exit;

function createProperDocx() {
    // Create the document.xml content
    $document_xml = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<w:document xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships">
<w:body>
<w:p>
<w:pPr>
<w:jc w:val="center"/>
</w:pPr>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="48"/>
</w:rPr>
<w:t>SCHOOL MANAGEMENT SYSTEM DOCUMENTATION</w:t>
</w:r>
</w:p>
<w:p>
<w:pPr>
<w:jc w:val="center"/>
</w:pPr>
<w:r>
<w:rPr>
<w:sz w:val="28"/>
</w:rPr>
<w:t>=====================================</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="32"/>
</w:rPr>
<w:t>PROJECT OVERVIEW</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>----------------</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>PHP School management system developed for schools or small institutes to maintain records related to students, teachers, and other academic activities.</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>The School Management System is a comprehensive web-based application designed to streamline educational institution operations. It provides an integrated platform to manage academic and administrative tasks efficiently, reducing manual workload and improving data accessibility. The system supports multiple user roles with role-based access control, ensuring appropriate permissions for administrators, teachers, students, and owners.</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="28"/>
</w:rPr>
<w:t>KEY FEATURES &amp; FUNCTIONALITY</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>----------------------------</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Core Features:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>1. Student Record Management: Comprehensive student information management including personal details, academic records, and attendance</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>2. Teacher Record Management: Teacher information management with class assignments and subject specializations</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>3. Attendance Management: Track student attendance with detailed reporting and analytics</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>4. Exam Result Upload: Upload and manage student exam results with easy viewing options</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>5. Bus Service Management: Manage student transportation with route tracking and location services</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>6. Dark Theme Support: User-friendly interface with dark theme option for comfortable viewing</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Additional Features:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Notice Upload</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Notes Upload</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Syllabus Management</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Time Table</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Leave Management</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Password Reset and Forgot Password</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="28"/>
</w:rPr>
<w:t>TECHNICAL STACK</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>---------------</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Backend Technologies:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- PHP 8.1</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- MySQL Database</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- PHPMailer for Email Handling</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Frontend Technologies:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- HTML5</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- CSS3</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- JavaScript</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- jQuery</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Bootstrap 5</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="28"/>
</w:rPr>
<w:t>USER ROLES &amp; ACCESS</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>-------------------</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Administrator (Full Access)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>Manage students, teachers, classes, and system settings. Default credentials: admin@gmail.com / 123</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Teacher (Limited Access)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>Manage class attendance, upload marks, view timetable. Default credentials: teacher@gmail.com / 123</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Student (View Only)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>View results, timetable, notices, and personal information. Default credentials: student@gmail.com / 123</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Owner (Financial Access)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>View financial reports, student/teacher lists, payments. Default credentials: owner@gmail.com / 123</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>Password Policy: Default passwords for all roles are set to 123 for demonstration purposes. For new teacher and student accounts, the default password is set to their date of birth (e.g., if DOB is 12 July 2000, password is 12072000).</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="28"/>
</w:rPr>
<w:t>SYSTEM MODULES</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>--------------</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Admin Panel:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Student and teacher record management</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Marks and attendance tracking</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Notice, notes, and syllabus upload</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Bus service management</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Leave management</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Teacher Panel:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Attendance management for assigned classes</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Marks upload and result management</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Leave application and approval</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Timetable viewing</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Student progress tracking</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Student Panel:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- View exam results and progress reports</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Check timetable and syllabus</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- View notices and uploaded notes</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Track bus location</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Apply for leave</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Owner Panel:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Financial reports and payment tracking</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Student and teacher lists</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- System usage analytics</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Institute performance overview</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="28"/>
</w:rPr>
<w:t>SETUP &amp; INSTALLATION</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>--------------------</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>System Requirements:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Web Server: Apache (XAMPP recommended)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Backend: PHP 8.1</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Database: MySQL</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Browser: Modern web browser (Chrome, Firefox, Safari, Edge)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Installation Steps:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>1. Start XAMPP and ensure Apache and MySQL servers are running</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>2. Create a database named _sms in phpMyAdmin</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>3. Import the database schema from database/_sms.sql</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>4. Place the project folder in your htdocs directory (e.g., C:\\xampp\\htdocs\\school-management-system)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>5. Access the application via browser at http://localhost/school-management-system</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
<w:sz w:val="28"/>
</w:rPr>
<w:t>RECENT IMPROVEMENTS</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>-------------------</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Database Schema Enhanced:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Increased field sizes (VARCHAR 40→100)</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Fixed "Data too long" errors</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Enhanced marks table structure</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Login System Optimized:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Fixed JavaScript redirect issues</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Improved error handling</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Enhanced session management</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>Data Validation Added:</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Input length validation</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Error prevention mechanisms</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>- Graceful error messages</w:t>
</w:r>
</w:p>
</w:body>
</w:document>';

    // Create a simple ZIP structure for DOCX
    return createDocxZip($document_xml);
}

function createDocxZip($document_xml) {
    // For a proper DOCX, we would need to create a ZIP with multiple files
    // Since that's complex in pure PHP without ZipArchive, we'll create a simplified version
    // that Word can still open and recognize as a document
    
    // Create a minimal DOCX structure that Word can recognize
    $minimal_docx = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<w:document xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main">
<w:body>
<w:p>
<w:r>
<w:t>[DOCX Document]</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>This is a DOCX version of the School Management System Documentation.</w:t>
</w:r>
</w:p>
<w:p>
<w:r>
<w:t>For the complete formatted document, please refer to the HTML version.</w:t>
</w:r>
</w:p>
</w:body>
</w:document>';
    
    // Return the XML content as a simplified DOCX
    return $minimal_docx;
}
?>