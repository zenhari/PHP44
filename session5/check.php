<?php
include("config.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE email='$email' && password = '$password'";
$result = mysqli_query($conn, $query);

if($data = mysqli_fetch_row($result)){
    
    $_SESSION['first_name']=$data['1'];
    $_SESSION['last_name']=$data['2'];

    echo "Dear, ". $_SESSION['first_name'] ." " . $_SESSION['last_name'];
}else{
    header("location: login.php");
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="gallery.php">Gallery</a>
</body>
</html>