<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <title>Document</title>
</head>
<?php
include("config.php");
$id = $_GET['id'];

$query = "SELECT * FROM personnel_data Where id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<body>
    <div class="container col-9 mt-5">
        <form class="form-group" action="update.php" method="post">
            <input class="form-control" type="hidden" name="id" id="" value="<?php echo $row['id'] ?>">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="first_name" id="" value="<?php echo $row['first_name'] ?>">
            <label for="family">Family</label>
            <input class="form-control" type="text" name="last_name" id="" value="<?php echo $row['last_name'] ?>">
            <label for="mobile">mobile</label>
            <input class="form-control" type="text" name="mobile" id="" value="<?php echo $row['mobile'] ?>">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="" value="<?php echo $row['email'] ?>">
            <input class="btn btn-sm bg-success text-light mt-1" type="submit" value="Update">
        </form>
    </div>
</body>

</html>