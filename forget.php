<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $Firstname = $conn->real_escape_string($_POST['Firstname']);
    $Othername = $conn->real_escape_string($_POST['Othername']);
    
    // Check if the user exists in the database
    $sql = "SELECT * FROM signup WHERE Firstname='$Firstname' AND Othername='$Othername'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // User exists, fetch their data (for demo purposes, showing their info)
        $row = $result->fetch_assoc();
        echo "Firstname: " . $row['Firstname'] . "<br>";
        echo "Othername: " . $row['Othername'] . "<br>";
        echo "Username: " . $row['Username'] . "<br>";
        echo "Level: " . $row['Level'] . "<br>"; echo "Password: " . $row['Password'] . "<br>"; 
        // Optionally, generate a reset link (e.g., send an email with reset link) or allow password reset here
    } else {
        // User not found
        echo "No user found with that information.";
    }
    
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get password</title>
</head>
<style>
    body{
        background-color:grey;
        color:white;
        font-size:30px;
        text-align:center;
    }
</style>
<body>
    
</body>
</html>