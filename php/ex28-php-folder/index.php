<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php
    define('VALOR_INICIAL',255);
    define('VALOR_FINAL', 555);

    //comando while
    $i = VALOR_INICIAL;
    echo "While <br />";
    while( $i <= VALOR_FINAL) {
        echo "$i <br  />";
        $i++;
    }

    echo "<hr />";

    echo "For <br />";
    for ($i = VALOR_INICIAL; $i <= VALOR_FINAL; $i++){
        echo "$i<br />";
    }
?>

</body>
</html>

