<?php
include("config.php");

$query = "SELECT * from personnel_data";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_row($result)) {
    echo "$row[1] $row[2] $row[3] $row[4] $row[5] $row[6]<br>";
}
?>