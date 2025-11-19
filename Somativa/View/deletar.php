<?php
include_once "../Model/LivroDAO.php";
$dao = new LivroDAO();
$dao->deleteLivro($_GET["id"]);
header("Location: listar.php");
