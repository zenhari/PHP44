<?php
include ("config.php"); //load database details

$query = 'INSERT into personnel_data (first_name, last_name, mobile, username, password, email)
VALUES("mehdi", "zenhari","09177157661", "zenhari", "123456", "zenhari@gmail.com")';
mysqli_query($conn, $query); // اجرای Query
?>