<?php
include("config.php");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$id = $_POST['id'];

$query = "UPDATE personnel_data set first_name = '$first_name' , last_name= '$last_name', mobile= '$mobile',
 email='$email' WHERE id='$id'";

mysqli_query($conn, $query);
header("location: form.php");
