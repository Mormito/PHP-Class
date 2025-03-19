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

    if ($n1 == $n2) {
        echo "Numeros iguais";
    } else if ($n1 > $n2) {
        echo "$n1 é maior que $n2";
    } else {
        echo "$n2 é maior que $n1";
    }
    
?>

</body>
</html>

