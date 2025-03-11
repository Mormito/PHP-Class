<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>


<?php
    $base = $_GET['base'];
    $altura = $_GET['altura'];
    $area = ($base * $altura)/2;

    echo "SE base = $base e altura = $altura, a área é = $area";
?>

</body>
</html>

