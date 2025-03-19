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

    if ($n1 > 0) { 
        $n1 = $n1*2;
        echo "VALOR: $n1 <br>";
    } else {
        $n1 = $n1*3;
        echo "VALOR: $n1 <br>";
    }

    if ($n2 > 10 and $n2 < 100){
        echo "Intervalo permitido <br>";
    }

    if ($n3 < $n2) {
        $diferenca = $n3 - $n2;
        echo "Diferença entre $n3 e $n2 é de $diferenca <br>";
    } else {
        $n3 = $n3+1;
        echo "VALOR: $n3 <br>";
    }
    
?>

</body>
</html>

