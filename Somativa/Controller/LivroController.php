<?php

include_once "Model/Livro.php";
include_once "Model/LivroDAO.php";

class LivroController
{
    private $dao;

    public function __construct()
    {
        $this->dao = new LivroDAO();
    }

    public function salvar()
    {
        $id = isset($_POST["id"]) ? $_POST["id"] : null;
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $ano = $_POST["ano"];
        $genero = $_POST["genero"];
        $quantidade = $_POST["quantidade"];

        if ($id) {
            $this->dao->updateLivro(new Livro($id, $titulo, $autor, $ano, $genero, $quantidade));
        } else {
            $this->dao->createLivro(new Livro(null, $titulo, $autor, $ano, $genero, $quantidade));
        }

        header("Location: index.php");
        exit;
    }

    public function excluir()
    {
        $id = $_GET["id"];
        $this->dao->deleteLivro($id);
        header("Location: index.php");
        exit;
    }

    public function editar()
    {
        $id = $_GET["id"];
        return $this->dao->buscarPorId($id);
    }

    public function listar()
    {
        return $this->dao->readLivros();
    }
}

$controller = new LivroController();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
    if ($action === "salvar") $controller->salvar();
    if ($action === "excluir") $controller->excluir();
}
