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
    $valor2 = $_GET['valor2'];
    $i = $valor1;

    //comando while
    echo "While <br />";
    while($valor1 <= $valor2) {
        echo "$valor1 <br  />";
        $valor1++;
    }

    echo "<hr />";

    echo "For <br />";
    for ($i; $i <= $valor2; $i++){
        echo "$i<br />";
    }
?>

</body>
</html>

