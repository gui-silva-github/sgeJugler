<div class="matriculas">

    <h1>Inserir nova <span class="jugler">matrícula</span></h1>

    <form method="post" action="processar/processa_matricula.php" style="margin-top: 2em;">

        <p class="badge text-bg-secondary">Selecione o aluno</p>
        <select class="form-control" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php


        $sql = "SELECT * FROM alunos";


        $stm = $con->prepare($sql);
    
        $stm->execute();
    
        $linha = $stm->fetchAll();
    
        for ($i = 0; $i<sizeof($linha); $i++){
            echo '<option value="'.$linha[$i]['id_aluno'].'">'.$linha[$i]['nome_aluno'].'</option>';
        }  
        ?>
        </select>
        <br><br>
        <p class="badge text-bg-secondary">Selecione o curso</p>


        <select class="form-control" name="escolha_curso">
        <option>Selecione um curso</option>
        <?php


        $sql = "SELECT * FROM cursos";


        $stm = $con->prepare($sql);
    
        $stm->execute();
    
        $linha = $stm->fetchAll();
    
        for ($i = 0; $i<sizeof($linha); $i++){
            echo '<option value="'.$linha[$i]['id_curso'].'">'.$linha[$i]['nome_curso'].'</option>';
        }  
        ?>
        </select>
        <br><br>
        <input class="btn btn-success" type="submit" value="Matricular aluno no curso">

    </form>

</div>

