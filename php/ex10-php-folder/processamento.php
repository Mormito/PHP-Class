<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>


<?php
    $nota1 = $_GET['n1'];
    $nota2 = $_GET['n2'];
    $nota3 = $_GET['n3'];
    $nota4 = $_GET['n4'];

    $mediatrinta = ($nota1+$nota2+$nota3)/3*0.3;
    $mediasetenta = $nota4 * 0.7;
    
    $media = $mediatrinta + $mediasetenta;

    echo "NOTA 1: $nota1 <br>";
    echo "NOTA 2: $nota2 <br>";
    echo "NOTA 3: $nota3 <br>";
    echo "NOTA 4: $nota4 <br>";
    echo "MÉDIA TOTAL: $media"
?>

</body>
</html>

