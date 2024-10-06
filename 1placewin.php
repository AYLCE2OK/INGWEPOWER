<?php
include 'play.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['Username'];
    $Level = $_POST['Level'];
    $Team = $_POST['Team'];
    $Amount = $_POST['Amount'];
    $Comment = $_POST['Comment'];

    $sql = "INSERT INTO 1placewin (Username,Level,Team,Amount,Comment) VALUES ('$Username','$Level','$Team','$Amount', '$Comment')";
    
    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body{
        background-color:grey;
     
        position:inhert;
        
    }
    fieldset{
        font-size:20px;
        margin:180px;
    width: 60%;
    height: auto;
 height: auto;
 border: none;
 border-radius: 6px;
 background-color: rgb(227, 226, 226);
 color: black;
 box-shadow: 10px 5px 5px rgb(170, 169, 166);
}
button{
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    background-color:chocolate;
    color:white
}
button:hover{
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    background-color:rgb(244, 120, 32);
}
</style>
<body><br> <fieldset>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:30px;color:chocolate;">INGWE Power</span>  <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dear thanks for your 
contribution<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enjoy your 
contribution.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="home logged in.html"><button>Skip</button>
</a>
</fieldset>
 
</body>
</html>

