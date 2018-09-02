<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "eplanner");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE registration SET lname='' WHERE id=6";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>