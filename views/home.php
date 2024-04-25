<h3 style="margin-top: 2em;"><span class="jugler">Home</span></h3>

<div class="home">
    <form method="post" action="login.php">
        <label for="usuario" class="badge text-bg-secondary">Usuário:</label>
        <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control"><br>
        <label for="senha" class="badge text-bg-secondary">Senha:</label>
        <input type="password" name="senha" placeholder="Digite a senha" class="form-control">
        <input style="margin-top: 1.3em;" type="submit" value="Entrar" class="btn btn-success">
    </form>
</div>

<br>

<?php

if (isset($_GET['erro'])){ 
    
?>

<div class="alerta">
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos
    </div>
</div>

<?php

    }

?>