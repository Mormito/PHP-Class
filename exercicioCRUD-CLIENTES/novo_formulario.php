<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
</head>

<body>

    <p>O objetivo desse exercício é o de demonstrar
        como se conectar em um banco de dados e inserir um registro</p>

    <form method="POST" action="novo_processamento.php">
        Tipo:<br />
        <input type="text" id="tipo" name="tipo" size="50" maxlength="300"/>

        <br /><br />

        Endereço:<br />
        <input type="text" id="endereco" name="endereco" size="50" maxlength="300"/>

        <br /><br />
        
        Número:<br />
        <input type="text" id="numero" name="numero" size="20" maxlength="5"/>

        <br /><br />

        Cidade:<br />
        <input type="text" id="cidade" name="cidade" size="50" maxlength="200"/>

        <br /><br />

        UF:<br />
        <input type="text" id="uf" name="uf" size="20" maxlength="2"/>

        <br /><br />

        <input type="submit" value="Cadastrar" />
        <input type="reset" value="Limpar" />
    </form>
</body>

</html>