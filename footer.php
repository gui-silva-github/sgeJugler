</div>

<footer>
    <div class="rodape" style="color: white; text-align: center; padding-top: 1em;">
        Cursos Jugler - 2024 - Todos os direitos reservados
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="dataTables/datatables.min.js"></script>

<script>

    let cursos = new DataTable('#cursos', {
        language: {
            url: './traducaoBR.json',
        },
    });
    let alunos = new DataTable('#alunos', {
        language: {
            url: './traducaoBR.json',
        },
    });
    let matriculas = new DataTable('#matriculas', {
        language: {
            url: './traducaoBR.json',
        },
    });

</script>

</body>
</html>