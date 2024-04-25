<?php

    include '../db.php';

    if(isset($_POST['nome_aluno']) && isset($_POST['data_nascimento'])){
        $nome_aluno = $_POST['nome_aluno'];
        $data_nascimento = $_POST['data_nascimento'];
    }

    $sql = "INSERT INTO alunos(nome_aluno, data_nascimento) VALUES('$nome_aluno', '$data_nascimento')";

    $stm = $con->prepare($sql);

    $stm->execute();

    header('location: ../index.php?pagina=alunos');

?>