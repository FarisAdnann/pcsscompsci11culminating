<?php
$servername = "localhost";
$dbname = "mygr11compsciculminating";

// Create connection
$conn = new mysqli($servername, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
