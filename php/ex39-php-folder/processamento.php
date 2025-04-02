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

    if($valor1 > $valor2) {
        echo "ERRO! Valor inicial maior que valor final.";
    } else {
        echo "While <br />";
        while($i <= $valor2) {
            echo "$i <br  />";
            $i++;
        }
    }
    echo "<hr />";
?>

</body>
</html>

