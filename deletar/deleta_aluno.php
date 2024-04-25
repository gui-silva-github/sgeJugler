<?php

    include '../db.php';

    echo explode("?", $_GET['i'])[0];

    $id_aluno = explode("=", $_GET['i'])[1];

    echo $id_aluno;

    $query = "DELETE FROM alunos WHERE id_aluno = '$id_aluno'";

    $stm = $con->prepare($query);

    $stm->execute();

    header('location:../index.php?pagina=alunos');

?>