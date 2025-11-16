<?php 
//DELETE FROM `personnel_data` WHERE `personnel_data`.`id` = 4"
include ("config.php");
$get = $_GET['id'];
$query = "DELETE FROM personnel_data WHERE id = $get";
mysqli_query($conn, $query);
header("location: form.php");
?>