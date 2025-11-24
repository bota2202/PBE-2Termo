<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Novo Livro</h1>
    <form action="criar_action.php" method="post" required>
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="number" name="ano" placeholder="Ano" required>
        <input type="text" name="genero" placeholder="Gênero" required>
        <input type="number" name="quantidade" placeholder="Quantidade" required>
        <button type="submit">Salvar</button>
    </form>
    <a href="listar.php">Livros cadastrados</a>
</body>

</html>