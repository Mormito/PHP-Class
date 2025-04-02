<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php
    $valor1 = $_GET['valor1'];
    $i = $valor1;
    $valor2 = $_GET['valor2'];
    $qtdvalores = $valor2 - $valor1;
    $soma = 0;

        while($i <= $valor2) {
            $soma += $i;
            $i++;
        }

        $mediaaritmetica = $soma/$qtdvalores;
        echo "
        Soma: $soma <br />
        Quantidade de valores: $qtdvalores <br />
        Média aritmética: $mediaaritmetica";
    echo "<hr />";
    
?>

</body>
</html>

