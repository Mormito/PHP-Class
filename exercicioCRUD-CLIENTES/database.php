<?php

    //Informações da conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "loja";

    //Conectando no servidor do banco de dados
    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    } catch (PDOException $e) {
        echo 'Erro de conexão: ' . $e->getMessage();
        exit();
    }    
?>