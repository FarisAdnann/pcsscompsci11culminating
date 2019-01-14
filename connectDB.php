<?php
$servername = 'localhost';
$username = 'id8418842_root';
$password = 'josharis123';
$dbname = 'id8418842_mygr11compsciculminating';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
