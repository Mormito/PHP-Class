<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php
    define('VALOR_INICIAL', 255);
    define('VALOR_FINAL', 555);
    $i = VALOR_INICIAL;
    $mult = 255;

    //comando while
    echo "While <br />";
    while($i <= VALOR_FINAL  ) {
        $i++;
        $mult *= $i;
        echo "$mult <br  />";
    }
    echo "<hr />";


?>

</body>
</html>

