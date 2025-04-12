<?php
$servername = "localhost";
$username = "root"; // Default username for WAMP
$password = "root"; // Default password is empty
$database = "user.db";

// Create connection
$conn = new mysqli("localhost", "root", "root", "user.db");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
