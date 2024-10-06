<?php
$servername = "localhost";
$username = "root";  // Default MySQL username
$password = "";  // Default MySQL password, change if you have set a different password
$dbname = "account";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
