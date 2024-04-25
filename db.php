<?php

    try{

    $con = new PDO("mysql:host=localhost;dbname=jugler", "root", "");

    } catch (PDOException $e){
        echo "Erro: " . $e;
    }

?>