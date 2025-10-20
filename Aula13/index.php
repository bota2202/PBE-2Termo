<?php 

    namespace Aula13;

    require_once "crud.php";
    require_once "alunoDAO.php";

    use Aula13\Aluno;

    $dao = new AlunoDao();

    $dao -> criarAlunos(new Aluno(1, "Josias", "Panificação"));
    $dao -> criarAlunos(new Aluno(2, "Victor Hugo", "Manicure"));
    $dao -> criarAlunos(new Aluno(3, "Beatriz", "Eletricista"));

    echo "Listagem inicial:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }

    $dao->atualizarAlunos(1, "Josias", "Técnico em borracharia");

    echo "\nApós atualização:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }   

    $dao->atualizarAlunos(1, "Jozias", "Técnico em borracharia");

    echo "\nApós atualização:\n";
    foreach($dao->lerAlunos() as $aluno){
        echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
    }

?>
