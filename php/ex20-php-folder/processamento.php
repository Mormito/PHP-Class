<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];
    $n4 = $_GET['n4'];

    $media_aritimetica = ($n1+$n2+$n3+$n4)/4;

    echo $media_aritimetica >= 6 ? "APROVADO!" : "REPROVADO!"
    
?>

</body>
</html>

