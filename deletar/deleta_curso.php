<?php

    include '../db.php';

    echo explode("?", $_GET['i'])[0];

    $id_curso = explode("=", $_GET['i'])[1];

    echo $id_curso;

    $query = "DELETE FROM cursos WHERE id_curso = '$id_curso'";

    $stm = $con->prepare($query);

    $stm->execute();

    header('location:../index.php?pagina=cursos');

?>