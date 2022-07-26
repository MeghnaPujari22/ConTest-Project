<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//connection to mysql
$conn = mysqli_connect("localhost","root","","project") or die("connection failed");

$sql = "INSERT INTO feedback(name,email,messages) VALUES ('{$name}','{$email}','{$message}' )";

// insert in database 
$result = mysqli_query($conn, $sql) or die("Query failed");




echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="feedback.html">feedback page</a>.</p>
        
    </div>
</body>
</html>
';


mysqli_close($conn);




?>
