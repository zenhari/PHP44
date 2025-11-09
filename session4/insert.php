<?php
$host = "localhost"; //معرفی هاست
$user = "root"; // معرفی نام کاربری پایگاه داده
$pass = ""; // کلمه عبور پایگاه داده
$db = "php44"; // نام پایگاه داده
$conn = mysqli_connect($host, $user, $pass, $db); // ایجاد اتصال 
$query = 'INSERT into personnel_data (first_name, last_name, mobile, username, password, email)
VALUES("mehdi", "zenhari","09177157661", "zenhari", "123456", "zenhari@gmail.com")';
mysqli_query($conn, $query); // اجرای Query
?>