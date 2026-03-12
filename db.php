<?php
$servername = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$username = "2mQMqH9Ap82UBa3.root";
$password = "hSkKYxCvRXkbbH0h";
$dbname = "register";
$port = 4000;

$con = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

