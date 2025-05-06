<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
</head>

<body>

    <p>O objetivo desse exercício é o de demonstrar
        como se conectar em um banco de dados, executar uma query, retornar os dados e exibir os mesmos</p>

    <?php

    //Incluindo o arquivo de conexão no banco de dados
    require_once("database.php");

    //Definindo a query
    $SQL = "SELECT * FROM clientes";

    //Guarda a busca no array $resultado
    $resultado = $conexao->query($SQL);

    //Capturando a quantidade de registros
    $quantidade = $resultado->rowCount();

    if ($quantidade == 0) {
        echo "Não há registros a serem exibidos";
        return;
    }

    echo "<table border = 1>";
    echo "	<tr>";
    echo "		<td>Código</td>";
    echo "		<td>Tipo</td>";
    echo "		<td>Endereço</td>";
    echo "		<td>Número</td>";
    echo "		<td>Cidade</td>";
    echo "		<td>UF</td>";
    echo "		<td>Alterar</td>";
    echo "		<td>Remover</td>";
    echo "	</tr>";

    //Percorrendo todos os registros
    while ($linha = $resultado->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>";
        //Imprime o elemento do array utilizando como chave o nome da coluna
        echo "<td>" . $linha->codigo . "</td>";
        echo "<td>" . $linha->tipo . "</td>";
        echo "<td>" . $linha->endereco . "</td>";
        echo "<td>" . $linha->numero . "</td>";
        echo "<td>" . $linha->cidade . "</td>";
        echo "<td>" . $linha->uf . "</td>";
        echo "<td> <a href='alterar_formulario.php?codigo=" . $linha->codigo . "'>Link</a></td>";
        echo "<td> <a href='remover_processamento.php?codigo=" . $linha->codigo . "'>Link</a></td>";

        echo "</tr>";
    }

    echo "</table>";

    //Fechando a conexão com o banco de dados
    // $conexao = null;
    unset($conexao);
    ?>

    <br />
    <a href="novo_formulario.php">Novo registro</a>

</body>

</html>