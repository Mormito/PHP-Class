<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php

// Imprima a somatória dos ímpares e divisíveis por 5 de todos os números de -200 até 200.

define('VALOR_INICIAL', -200);
    $i = -200;
    define('VALOR_FINAL', 200);
    $soma = 0;

    //comando while
    echo "While <br />";
    while($i <= VALOR_FINAL  ) {
        if ($i%3 == 0 or $i%5 == 0){
            $soma += $i;
            echo "$soma <br  />";
            $i++;
        } else {
            $i++;
        }
    }
    echo "<hr />";


?>

</body>
</html>

