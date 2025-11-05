<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $h = strftime("%H"); //$h را پر کن با Hour
        $m = strftime("%M");
        $s = strftime("%S");
        echo "Time is: ".$h.":".$m.":".$s
    ?>
</body>
</html>