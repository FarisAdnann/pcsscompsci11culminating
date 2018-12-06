<?php
include 'faris_connectDB.php';
$sql = "INSERT INTO mylogin (username, password)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
