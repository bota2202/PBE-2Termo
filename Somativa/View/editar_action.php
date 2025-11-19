<?php
include_once "../Model/LivroDAO.php";
include_once "../Model/Livro.php";


$l = new Livro(
    $_POST["id"],
    $_POST["titulo"],
    $_POST["autor"],
    $_POST["ano"],
    $_POST["genero"],
    $_POST["quantidade"]
);


$dao = new LivroDAO();
$dao->updateLivro($l);
header("Location: listar.php");
