<html lang="en">

<?php
include("config.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid col-9">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM personnel_data";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_row($result)) {
                echo "<tr>
      <th scope='row'>$row[0]</th>
      <td>$row[1]</td>
      <td>$row[2]</td>
      <td>$row[4]</td>
      <td>$row[3]</td>
      <td>
      <a class='btn btn-sm bg-danger text-light' href='delete.php?id=$row[0]'>Delete</a>
      <a class='btn btn-sm bg-warning text-light' href='edit.php?id=$row[0]'>Edit</a>
      </td>
    </tr>'";
            }

            ?>
        </table>
    </div>

</body>

</html>