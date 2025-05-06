<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
</head>

<body>

    <p>O objetivo desse exercício é o de demonstrar
        como se conectar em um banco de dados e inserir um registro</p>

    <?php

    $tipo = trim($_POST['tipo']);
    $endereco = trim($_POST['endereco']);
    $numero = trim($_POST['numero']);
    $cidade = trim($_POST['cidade']);
    $uf = trim($_POST['uf']);

    // Dados mockados
    // $descricao = "Sukita";
    // $modelo = "3 litros";
    // $quantidade = "999";
    // $valor = "0.99";

    if (($tipo == "") || ($endereco == "") || ($numero == "")|| ($cidade == ""|| ($uf == ""))) {
        echo "Há registros em branco!";
        return;
    }

    //Incluindo o arquivo de conexão no banco de dados
    require_once("database.php");

    //Definindo a query
	$SQL = "INSERT INTO clientes " .
    "(`tipo`, `endereco`, `numero`, `cidade`, `uf`)" .
    " VALUES " .
    "(:tipo, :endereco, :numero, :cidade, :uf)";


	$statement = $conexao->prepare($SQL);
	$statement->bindParam(':tipo', $tipo);
	$statement->bindParam(':endereco', $endereco);
	$statement->bindParam(':numero', $numero);
	$statement->bindParam(':cidade', $cidade);
    $statement->bindParam(':uf', $uf);
	if ($statement->execute()){
        echo "Registro inserido com sucesso";
    }
    else{
        echo "Falha ao inserir o registro";
    }

    //Fechando a conexão com o banco de dados
    unset($conexao);
    ?>

    <br /><br />
    <a href="index.php">Listar registros</a>

</body>

</html>