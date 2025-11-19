<?php
include_once "../Model/LivroDAO.php";
include_once "../Model/Livro.php";


$l = new Livro(null, $_POST["titulo"], $_POST["autor"], $_POST["ano"], $_POST["genero"], $_POST["quantidade"]);
$dao = new LivroDAO();
$dao->createLivro($l);
header("Location: listar.php");