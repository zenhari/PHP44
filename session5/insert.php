<?php
include("config.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query_check = "SELECT * FROM users where email='$email'";
$result = mysqli_query($conn, $query_check);

if ($data = mysqli_fetch_row($result)) {
    header("location: signup.php?error=userExist");
} else {
    $query = "INSERT into users (first_name, last_name, email, password) 
    VALUES('$first_name','$last_name', '$email','$password')";

    mysqli_query($conn, $query);
    echo "Signed Up Successfuly";
}
