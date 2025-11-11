<?php
include("config.php");

$query = "SELECT * FROM personnel_data";
$result = mysqli_query($conn, $query);

while ($assoc = mysqli_fetch_assoc($result)) {
    echo $assoc['first_name'] ." ". $assoc['last_name'] ." ". $assoc['mobile']." ".$assoc['email']."<br>";
}


?>