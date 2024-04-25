<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Jugler</title>
    <!-- CSS interno do Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS interno -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CDN do FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS do DataTables -->
    <link href="dataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <a href="?pagina=home">Home</a>
            <img src="imgs/logo.png" title="logo" alt="logo" width="90px" height="90px">
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <?php if(isset($_SESSION['login'])) { ?>
                <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (sair)</a>
                <?php } ?>
            </div>
        </div>
    </header>
    <div id="conteudo">
        <h2  style="margin-top: 1em;">Bem vindo a Cursos <span class="jugler">Jugler</span></h2>
</body>
</html>
