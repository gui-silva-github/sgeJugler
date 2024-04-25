<div class="cursos">

    <?php if(!isset($_GET['editar'])){ ?>

    <h1>Inserir novo <span class="jugler">curso</span></h1>
    <form method="post" action="processar/processa_curso.php">
        <br>
        <label class="badge text-bg-secondary">Nome curso:</label><br>
        <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso"><br><br>
        <label class="badge text-bg-secondary">Carga horária:</label><br>
        <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária (em horas)">
        <br><br><input class="btn btn-success" type="submit" value="Inserir curso">
    </form>

    <?php } else { ?>

    <?php
        
        $sql = "SELECT * FROM cursos";

        $stm = $con->prepare($sql);

        $stm->execute();

        $linha = $stm->fetchAll();

        for ($i = 0; $i<sizeof($linha); $i++){
        
    ?>

    <?php if($linha[$i]['id_curso'] == $_GET['editar']) { ?>

        <h1>Editar curso</h1>
    <form method="post" action="editar/edita_curso.php">
        <input type="hidden" name="id_curso" value="<?php echo $linha[$i]['id_curso']; ?>">
        <br>
        <label class="badge text-bg-secondary">Nome curso:</label><br>
        <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha[$i]['nome_curso']; ?>"><br><br>
        <label class="badge text-bg-secondary">Carga horária:</label><br>
        <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo $linha[$i]['carga_horaria']; ?>">
        <br><br><input class="btn btn-success" type="submit" value="Editar curso">
    </form>

    <?php } ?>

    <?php } ?>

    <?php } ?>

</div>