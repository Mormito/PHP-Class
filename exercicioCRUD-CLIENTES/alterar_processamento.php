<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
</head>

<body>

    <p>O objetivo desse exercício é o de demonstrar
        como se conectar em um banco de dados e inserir um registro</p>

    <?php

    $codigo = trim($_POST['codigo']);
    $tipo = trim($_POST['tipo']);
    $endereco = trim($_POST['endereco']);
    $numero = trim($_POST['numero']);
    $cidade = trim($_POST['cidade']);
    $uf = trim($_POST['uf']);

    // Dados mockados
    // $codigo = "14";

    if (($codigo == "" || $tipo == "") || ($endereco == "") || ($numero == "")|| ($cidade == ""|| ($uf == ""))) {
        echo "Há registros em branco!";
        return;
    }

    //Incluindo o arquivo de conexão no banco de dados
    require_once("database.php");

    //Definindo a query
	$SQL = "UPDATE clientes " .
    "SET tipo = :tipo, endereco = :endereco, numero = :numero, cidade = :cidade, uf = :uf" .
    " WHERE codigo = :codigo ";

	$statement = $conexao->prepare($SQL);
    $statement->bindParam(':codigo', $codigo);
	$statement->bindParam(':tipo', $tipo);
	$statement->bindParam(':endereco', $endereco);
	$statement->bindParam(':numero', $numero);
	$statement->bindParam(':cidade', $cidade);
    $statement->bindParam(':uf', $uf);
	if ($statement->execute()){
        echo "Registro alterado com sucesso";
    }
    else{
        echo "Falha ao alterar o registro";
    }

    //Fechando a conexão com o banco de dados
    unset($conexao);
    ?>

    <br /><br />
    <a href="index.php">Listar registros</a>

</body>

</html>