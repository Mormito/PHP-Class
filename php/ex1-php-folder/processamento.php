<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>


<?php
    $valor01 = $_GET['valor01'];
    $valor02 = $_GET['valor02'];

    $resultado = $valor01+$valor02;

    echo "O valor da soma de $valor01 + $valor02 é: " . $resultado;
?>

</body>
</html>

