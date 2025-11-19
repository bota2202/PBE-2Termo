<?php
include_once "../Model/LivroDAO.php";
$dao = new LivroDAO();
$lista = $dao->readLivros();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Lista de Livros</h1>
    <a href="criar.php">Novo Livro</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano</th>
            <th>Gênero</th>
            <th>Qtd</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $l): ?>
            <tr>
                <td><?= $l->getId() ?></td>
                <td><?= $l->getTitulo() ?></td>
                <td><?= $l->getAutor() ?></td>
                <td><?= $l->getAno() ?></td>
                <td><?= $l->getGenero() ?></td>
                <td><?= $l->getQuantidade() ?></td>
                <td>
                    <a href="editar.php?id=<?= $l->getId() ?>">Editar</a>
                    <a href="deletar.php?id=<?= $l->getId() ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>