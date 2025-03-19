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

    if ($n1 > 0 and $n1%2 == 0){
        echo "Numero positivo e par.";
    } else if ($n1 > 0 and $n1%2 != 0){
        echo "Numero positivo e impar";
    } else if ($n1 < 0 and $n1%2 == 0){
        echo "Numero negativo e par ";
    } else {
        echo "Numero negativo e impar";
    }
    
?>

</body>
</html>

