<?php

include_once "Connection.php";
include_once "Livro.php";

class LivroDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getInstance();

        $this->conn->exec("
            CREATE TABLE IF NOT EXISTS livros (
                id INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(200),
                autor VARCHAR(150),
                ano INT,
                genero VARCHAR(100),
                quantidade INT
            )
        ");
    }

    public function createLivro(Livro $l)
    {
        $sql = "INSERT INTO livros (titulo, autor, ano, genero, quantidade)
                VALUES (?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $l->getTitulo(),
            $l->getAutor(),
            $l->getAno(),
            $l->getGenero(),
            $l->getQuantidade()
        ]);
    }

    public function readLivros()
    {
        $sql = "SELECT * FROM livros";
        $stmt = $this->conn->query($sql);

        $lista = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $livro = new Livro(
                $row["id"],
                $row["titulo"],
                $row["autor"],
                $row["ano"],
                $row["genero"],
                $row["quantidade"]
            );

            $lista[] = $livro;
        }

        return $lista;
    }

    public function updateLivro(Livro $l)
    {
        $sql = "UPDATE livros
                SET titulo=?, autor=?, ano=?, genero=?, quantidade=?
                WHERE id=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            $l->getTitulo(),
            $l->getAutor(),
            $l->getAno(),
            $l->getGenero(),
            $l->getQuantidade(),
            $l->getId()
        ]);
    }

    public function deleteLivro($id)
    {
        $sql = "DELETE FROM livros WHERE id=?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM livros WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Livro(
                $row["id"],
                $row["titulo"],
                $row["autor"],
                $row["ano"],
                $row["genero"],
                $row["quantidade"]
            );
        }

        return null;
    }
}
