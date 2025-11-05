<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $bmi = $_GET['weight'] / ($_GET['height'] * $_GET['height']);
    $name = $_GET['name'];
    echo "Dear $name, Your BMI is : $bmi<br>";
    ?>
</body>

</html>