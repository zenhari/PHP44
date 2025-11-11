<?php
session_start();
if(!isset($_SESSION['first_name']) || 
!isset($_SESSION['last_name']) ){
    header("location: logout.php");
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Gallery
    <?php
        echo $_SESSION['first_name']
        . " " .
        $_SESSION['last_name'];
    ?>

</body>
</html>