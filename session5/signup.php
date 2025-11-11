<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['error']) && $_GET['error']=='userExist'){
        echo "This email Already Registered";
    }
    ?>
    <form action="insert.php" method="post">
        <input type="text" name="first_name" placeholder="First Name"><br>
        <input type="text" name="last_name" placeholder="Last Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" required><br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>