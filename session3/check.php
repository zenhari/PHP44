<?php
$password = $_POST['password'];
$username = $_POST['username'];

if ($username == 'zenhari' && $password == '70127074') {
    echo "Ok";
} else {
    header("location: login.php?status=error");
}
