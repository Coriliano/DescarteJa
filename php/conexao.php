<?php

//Definir as variaveís que serão usadas para conexão

$servidor = 'localhost';
$usuario_servidor = 'root';
$senha_servidor = '';
$banco_dados = 'descarteja';

//Utilizar a função MySQL para executar a conexão com o banco

$conexao = new mysqli($servidor, $usuario_servidor, $senha_servidor, $banco_dados);

if (!$conexao) {

    die('Falha na conexão');

    }

?>