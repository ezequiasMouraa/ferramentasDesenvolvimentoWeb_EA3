<?php
include 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$local = $_POST['local'];

$sql = "INSERT INTO moradias (nome, telefone, idade, local) VALUES ('$nome', '$telefone', $idade, '$local')";

if ($conexao->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao salvar: " . $conexao->error;
}

$conexao->close();
?>
