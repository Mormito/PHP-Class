<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php
    define('VALOR_INICIAL', -333);
    $i = -333;
    define('VALOR_FINAL', 333);
    $soma = 0;

    //comando while
    echo "While <br />";
    while($i <= VALOR_FINAL  ) {
        if ($i%3 == 0){
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

