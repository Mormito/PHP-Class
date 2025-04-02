<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php
    define('VALOR_INICIAL',1);
    define('VALOR_FINAL', 100);
    $i = VALOR_INICIAL;
    $soma = 0;

    //comando while
    echo "While <br />";
    while($i <= VALOR_FINAL  ) {
        $soma += $i;
        echo "$soma <br  />";
        $i++;
    }
    echo "<hr />";


?>

</body>
</html>

