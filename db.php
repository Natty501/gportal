<?php
$host     = "dpg-d4s45pvgi27c73btfs6g-a"; // Render PostgreSQL host
$port     = "5432";                        // default PostgreSQL port
$dbname   = "gportal_db";
$user     = "gportal_db_user";
$password = "Rc8uPUHQstLexJqSRNSeuVXh1fjGRXPt";        // replace with the password Render gave you

// Connect to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>


