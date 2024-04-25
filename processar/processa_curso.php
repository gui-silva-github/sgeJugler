<?php

    include '../db.php';

    if(isset($_POST['nome_curso']) && isset($_POST['carga_horaria'])){
        $nome_curso = $_POST['nome_curso'];
        $carga_horaria = $_POST['carga_horaria'];
    }

    $sql = "INSERT INTO cursos(nome_curso, carga_horaria) VALUES('$nome_curso', $carga_horaria)";

    $stm = $con->prepare($sql);

    $stm->execute();

    header('location: ../index.php?pagina=cursos');

?>