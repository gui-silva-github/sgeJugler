<?php

    include 'db.php';

    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        $usuario = addslashes($_POST['usuario']);
        $senha = md5($_POST['senha']);
    }

    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

    $consulta = $con->prepare($query);

    $consulta->execute();

    $rs = $consulta->fetch();

    if($rs){
        
        /*
        echo $rs['usuario'] . '<br>' . $rs['senha'] . '<hr><br>';
        echo 'Login feito com sucesso';*/
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $usuario;
        header('location:index.php');
      
    } else {
        /*
        echo 'Usuário e/ou senha inválida';*/
        header('location:index.php?erro');
    }

?>