<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>


<?php
    $valor = $_GET['valor'];
    $calcula25 = $valor * 0.25;
    $calcula50 = $valor * 0.50;
    $calcula100 = $valor * 1;
    $calcula150 = $valor * 1.5;

    echo "25% de $valor = $calcula25 <br>";
    echo "50% de $valor = $calcula50 <br>";
    echo "100% de $valor = $calcula100 <br>";
    echo "150% de $valor = $calcula150";
?>

</body>
</html>

