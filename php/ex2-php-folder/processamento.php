<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>


<?php
    $lado = $_GET['lado'];

    $area = $lado * $lado;

    echo "A área de um quadrado de lado $lado: " . $area;
?>

</body>
</html>

