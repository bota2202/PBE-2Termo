<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Novo Livro</h1>
    <form action="criar_action.php" method="post">
        <input type="text" name="titulo" placeholder="Título">
        <input type="text" name="autor" placeholder="Autor">
        <input type="number" name="ano" placeholder="Ano">
        <input type="text" name="genero" placeholder="Gênero">
        <input type="number" name="quantidade" placeholder="Quantidade">
        <button type="submit">Salvar</button>
    </form>
</body>

</html>