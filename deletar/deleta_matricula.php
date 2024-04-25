<?php

    include '../db.php';

    echo explode("?", $_GET['i'])[0];

    $id_aluno_curso = explode("=", $_GET['i'])[1];

    echo $id_curso;

    $query = "DELETE FROM alunos_cursos WHERE id_aluno_curso = '$id_aluno_curso'";

    $stm = $con->prepare($query);

    $stm->execute();

    header('location:../index.php?pagina=matriculas');

?>