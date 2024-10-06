<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Firstname = $_POST['Firstname'];
    $Othername = $_POST['Othername'];
    $Username = $_POST['Username'];
    $Level = $_POST['Level'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO signup (Firstname,Othername,username,Level,Password) VALUES ('$Firstname','$Othername','$Username','$Level', '$Password')";
    
    if ($conn->query($sql) === TRUE) {
        Header('location:LOGIN1.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

