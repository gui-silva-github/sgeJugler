<?php

    include '../db.php';

    if(isset($_POST['escolha_aluno']) && isset($_POST['escolha_curso'])){
        $id_aluno = $_POST['escolha_aluno'];
        $id_curso = $_POST['escolha_curso'];
    }

    $sql = "INSERT INTO alunos_cursos (id_aluno, id_curso) VALUES('$id_aluno', '$id_curso')";

    $stm = $con->prepare($sql);

    $stm->execute();

    header('location: ../index.php?pagina=matriculas');

?>