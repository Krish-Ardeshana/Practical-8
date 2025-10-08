<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "event_portal";

$conn = new mysqli($host, $user, $pass, $dbname);

// Error handling
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
