<?php
$servername = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com
";   // MySQL Host Name
$username = "2mQMqH9Ap82UBa3.root";                // MySQL User Name
$password = "hSkKYxCvRXkbbH0h";        // Replace with your vPanel password
$dbname = "test";       // MySQL DB Name
$port = "4000";
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


