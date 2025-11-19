<?php
include_once "../Model/LivroDAO.php";
$dao = new LivroDAO();
$livro = $dao->buscarPorId($_GET["id"]);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Editar Livro</h1>
    <form action="editar_action.php" method="post">
        <input type="hidden" name="id" value="<?= $livro->getId() ?>">
        <input type="text" name="titulo" value="<?= $livro->getTitulo() ?>">
        <input type="text" name="autor" value="<?= $livro->getAutor() ?>">
        <input type="number" name="ano" value="<?= $livro->getAno() ?>">
        <input type="text" name="genero" value="<?= $livro->getGenero() ?>">
        <input type="number" name="quantidade" value="<?= $livro->getQuantidade() ?>">
        <button type="submit">Salvar</button>
    </form>
</body>

</html>