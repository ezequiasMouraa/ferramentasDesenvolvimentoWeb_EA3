<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Pessoas</title>
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header-index">
        <h1>Lista de Pessoas</h1>
        <a href="adicionar.php">Adicionar Pessoa</a>
    </header>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Idade</th>
            <th>Local</th>
            <th>Ações</th>
        </tr>
        <?php
        include 'conexao.php';

        $sql = "SELECT * FROM moradias";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nome']}</td>";
                echo "<td>{$row['telefone']}</td>";
                echo "<td>{$row['idade']}</td>";
                echo "<td>{$row['local']}</td>";
                echo "<td class='container-btn'><a class='edit' href='editar.php?id={$row['id']}'>Editar</a> <a class='delete' href='excluir.php?id={$row['id']}'>Excluir</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhum registro encontrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
