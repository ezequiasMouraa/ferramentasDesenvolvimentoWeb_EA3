<!DOCTYPE html>
<html>
<head>
    <title>Editar Pessoa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="css/estilo_form.css">
</head>
<body>
    <header class="header-editar">
        <h1>Editar Pessoa</h1>
        <a href="index.php">Voltar para a Lista</a>
    </header>
    <?php
    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM moradias WHERE id = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Registro não encontrado.";
        exit;
    }
    ?>
    <div class="container">
        <form class="form-card"method="POST" action="atualizar.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
            Telefone: <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" required><br>
            Idade: <input type="number" name="idade" value="<?php echo $row['idade']; ?>" required><br>
            Local: <input type="text" name="local" value="<?php echo $row['local']; ?>" required><br>
            <input class="btn-salvar" type="submit" value="Atualizar">
        </form>
    </div>
</body>
</html>
