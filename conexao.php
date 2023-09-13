<?php
$host = 'localhost';
$dbname = 'moradias';
$username = 'root';
$password = '';

// Conexão com o banco de dados
$conexao = new mysqli($host, $username, $password, $dbname);

// Verificação de erros na conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}
?>
