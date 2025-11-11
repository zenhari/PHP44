<?php
include("config.php");

$query = "DELETE FROM personnel_data Where id='2'";
mysqli_query($conn, $query);
echo "Delete Successfully";
?>