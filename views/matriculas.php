<div class="matriculas">

    <a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matrícula</a>

    <table class="table table-hover table-striped" id="matriculas">
        <thead>
    <tr>
        <th>Nome aluno</th>
        <th>Nome curso</th>
        <th>Deletar</th>
    </tr>
    </thead>

    <tbody>
    <?php

        $sql = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, alunos_cursos WHERE alunos_cursos.id_aluno = alunos.id_aluno AND alunos_cursos.id_curso = cursos.id_curso";

        $stm = $con->prepare($sql);

        $stm->execute();

        $linha = $stm->fetchAll();

        for ($i = 0; $i<sizeof($linha); $i++){
            echo "<tr><td>".$linha[$i]['nome_aluno']."</td>";
            echo "<td>".$linha[$i]['nome_curso']."</td>";

    ?>

    <td><a href="deletar/deleta_matricula.php?i=<?php echo $i;?>?id_aluno_curso=<?php echo $linha[$i]['id_aluno_curso'];?>"><i class="fa-solid fa-user-xmark" style="color: #ff1f1f;"></i></a></td></tr>

    <?php
        }
    ?>
    </tbody>

    </table>

</div>