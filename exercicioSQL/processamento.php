<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>

<p>O objetivo desse exercicio é aprender o CRUD.</p>

<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "loja";

    $conexao = mysqli_connect($servidor, $usuario, $senha) or die("Servidor MySQL indisponivel.");
    mysqli_select_db($conexao, $banco) or die ("Banco de dados indisponivel.");

    $SQL = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $SQL);

    $quantidade = mysqli_num_rows($resultado);

    if ($quantidade == 0){
        echo "Não há registros a serem exibidos";
        return;
    }

    echo "<table border = 1>";
    echo "<tr>";
    echo "      <td>Código</td>";
    echo "      <td>Descrição</td>";
    echo "      <td>Quantidade</td>";
    echo "      <td>Valor</td>";
    echo "</tr>";

    while ($linha = mysqli_fetch_array($resultado)) {
        echo "<tr>";

        //outra opção --> echo "<td> $linha[0] </td>";
        echo "<td> " . $linha['codigo'] . "</td>";

        echo "<td> " . $linha['descricao'] . "</td>";

        echo "<td> " . $linha['quantidade'] . "</td>";

        echo "<td> R$ " . $linha['valor'] . "</td>";
    }

    mysqli_close($conexao);

?>

</body>
</html>
