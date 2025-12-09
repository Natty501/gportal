<?php
$servername = "sql113.infinityfree.com";   // MySQL Host Name
$username = "if0_40508130";                // MySQL User Name
$password = "214doggy";        // Replace with your vPanel password
$dbname = "if0_40508130_gportal_db";       // MySQL DB Name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
