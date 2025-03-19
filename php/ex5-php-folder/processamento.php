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
    $antecessor =  $valor-1;
    $sucessor = $valor+1;
    
    echo "Antecessor = $antecessor <br>";
    echo "Valor = $valor <br>";
?>

</body>
</html>

