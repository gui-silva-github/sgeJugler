<div class="cursos">

    <a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
    <table class="table table-hover table-striped" id="cursos">
        <thead>
            <tr>
                <th>Nome curso</th>
                <th>Carga horária</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        <thead>

    <tbody>

    <?php

        $sql = "SELECT * FROM cursos";

        $stm = $con->prepare($sql);

        $stm->execute();

        $linha = $stm->fetchAll();

        for ($i = 0; $i<sizeof($linha); $i++){
            echo "<tr><td>".$linha[$i]['nome_curso']."</td>";
            echo "<td>".$linha[$i]['carga_horaria']."</td>";

    ?>

    <td><a href="?pagina=inserir_curso&editar=<?php echo $linha[$i]['id_curso'];?>"><i class="fa-solid fa-user-pen" style="color: #1f5137;"></i></a></td>

    <td><a href="deletar/deleta_curso.php?i=<?php echo $i;?>?id_curso=<?php echo $linha[$i]['id_curso'];?>"><i class="fa-solid fa-user-xmark" style="color: #ff1f1f;"></i></a></td></tr>

    <?php

        }

    ?>

    <tbody>

    </table>

</div>