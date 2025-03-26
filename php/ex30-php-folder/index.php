<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php
    define('VALOR_INICIAL',555);
    define('VALOR_FINAL', 255);
    $i = VALOR_INICIAL;
    $k = VALOR_INICIAL;

    //comando while
    echo "While <br />";
    while($i >= VALOR_FINAL  ) {
        echo "$i <br  />";
        $i--;
    }

    echo "<hr />";

    echo "For <br />";
    for ($k; $k >= VALOR_FINAL; $k--){
        echo "$k<br />";
    }


?>

</body>
</html>

