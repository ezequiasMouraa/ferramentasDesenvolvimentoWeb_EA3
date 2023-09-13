<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Pessoa</title>
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="css/estilo_form.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header-adicionar">
        <h1>Adicionar Pessoa</h1>
        <a href="index.php">Voltar</a>
    </header>
    <div class="container">
        <form class="form-card" method="POST" action="salvar.php">
            Nome: <input type="text" name="nome" required><br>
            Telefone: <input type="text" name="telefone" required><br>
            Idade: <input type="number" name="idade" required><br>
            Local: <input type="text" name="local" required><br>
            <input class="btn-salvar" type="submit" value="Salvar">
        </form>
    </div>
</body>
</html>
