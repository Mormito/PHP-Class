<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
</head>

<body>

    <?php
    $codigo = $_GET['codigo'];

    //Incluindo o arquivo de conexão no banco de dados
    require_once("database.php");

    //Definindo a query
    $SQL = "SELECT * FROM clientes WHERE codigo = $codigo";

    //Guarda a busca no array $resultado
    $resultado = $conexao->query($SQL);
    
    //Percorrendo todos os registros
    while ($linha = $resultado->fetch(PDO::FETCH_OBJ)) {
        $codigo = $linha->codigo;
        $tipo = $linha->tipo;
        $endereco = $linha->endereco;
        $numero = $linha->numero;
        $cidade = $linha->cidade;
        $uf = $linha->uf;
    }

    ?>

    <p>O objetivo desse exercício é o de demonstrar
        como se conectar em um banco de dados e alterar um registro</p>

    <form method="POST" action="alterar_processamento.php">

        <!-- Código: -->
        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo; ?>" />

        Tipo:<br />
        <input type="text" id="tipo" name="tipo" size="50" value="<?php echo $tipo; ?>" />

        <br /><br />

        Endereco:<br />
        <input type="text" id="endereco" name="endereco" size="50" value="<?php echo $endereco; ?>" />

        <br /><br />

        Número:<br />
        <input type="text" id="numero" name="numero" size="20" value="<?php echo $numero; ?>"/>

        <br /><br />

        Cidade:<br />
        <input type="text" id="cidade" name="cidade" size="20" value="<?php echo $cidade; ?>"/>

        <br /><br />

        UF:<br />
        <input type="text" id="uf" name="uf" size="20" value="<?php echo $uf; ?>"/>

        <br /><br />

        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
</body>

</html>