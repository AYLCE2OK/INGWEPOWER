<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM signup WHERE Username='$Username' And Password='$Password'";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
            Header('location:ingwe home login.html');
        } else {
            
        }
    } else {
        
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dear user your Information is incorrect. <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please check your data entered.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="LOGIN1.html"><button>Return</button>
</a>
</fieldset>
 
</body>
</html>
