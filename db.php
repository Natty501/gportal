<?php
$servername = "dpg-d4s45pvgi27c73btfs6g-a";
$username   = "gportal_db_user";
$password   = "••••••••••••••••";
$dbname     = "gportal_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

