<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$local = $_POST['local'];

$sql = "UPDATE moradias SET nome='$nome', telefone='$telefone', idade=$idade, local='$local' WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao atualizar: " . $conexao->error;
}

$conexao->close();
?>
