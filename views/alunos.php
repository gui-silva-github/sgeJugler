<div class="alunos">

    <a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
    <table class="table table-hover table-striped" id="alunos">
        <thead>
        
    <tr>
        <th>Nome aluno</th>
        <th>Data de Nascimento</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    </thead>

    <tbody>

    <?php

        $sql = "SELECT * FROM alunos";

        $stm = $con->prepare($sql);

        $stm->execute();

        $linha = $stm->fetchAll();

        for ($i = 0; $i<sizeof($linha); $i++){
            echo "<tr><td>".$linha[$i]['nome_aluno']."</td>";
            echo "<td>".$linha[$i]['data_nascimento']."</td>"; 

    ?>

    <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha[$i]['id_aluno'];?>"><i class="fa-solid fa-user-pen" style="color: #1f5137;"></i></a></td>

    <td><a href="deletar/deleta_aluno.php?i=<?php echo $i;?>?id_aluno=<?php echo $linha[$i]['id_aluno'];?>"><i class="fa-solid fa-user-xmark" style="color: #ff1f1f;"></i></a></td></tr>

    <?php

        }

    ?>
    </tbody>

    </table>

</div>