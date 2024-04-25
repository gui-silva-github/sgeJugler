<div class="alunos">

    <?php if(!isset($_GET['editar'])){ ?>

    <h1>Inserir novo <span class="jugler">aluno</span></h1>
    <form method="post" action="processar/processa_aluno.php">
        <br>
        <label class="badge text-bg-secondary">Nome aluno:</label><br>
        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno"><br><br>
        <label class="badge text-bg-secondary">Data de Nascimento:</label><br>
        <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
        <br><br><input class="btn btn-success" type="submit" value="Inserir aluno">
    </form>

    <?php } else { ?>

    <?php
        
        $sql = "SELECT * FROM alunos";

        $stm = $con->prepare($sql);

        $stm->execute();

        $linha = $stm->fetchAll();

        for ($i = 0; $i<sizeof($linha); $i++){
        
    ?>

    <?php if($linha[$i]['id_aluno'] == $_GET['editar']) { ?>

        <h1>Editar aluno</h1>
    <form method="post" action="editar/edita_aluno.php">
        <input type="hidden" name="id_aluno" value="<?php echo $linha[$i]['id_aluno']; ?>">
        <br>
        <label class="badge text-bg-secondary">Nome aluno:</label><br>
        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha[$i]['nome_aluno']; ?>"><br><br>
        <label class="badge text-bg-secondary">Data de Nascimento:</label><br>
        <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha[$i]['data_nascimento']; ?>">
        <br><br><input  class="btn btn-success" type="submit" value="Editar aluno">
    </form>

    <?php } ?>

    <?php } ?>

    <?php } ?>

</div>