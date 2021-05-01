<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title> Playlist </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="img/logomarca-gabriel-musicas.ico"/>
    <link rel="stylesheet" href="src/musicStyle.css">
</head>
<?php
    include 'funcoes/funcoes.php';
?>
<body>
    <header>
        <a href="main.html"> <img src="img/logomarca-gabriel-musicas.png" class="grow"> </a>
    </header>
    <h2> Músicas adicionadas </h2>
    <div class="container">
        <table style="display: table;">
            <thead>
                <tr>
                    <th colspan="2"></th>
                    <th class="titulo"> Titulo </th>
                    <th class="genero"> Gênero </th>
                </tr>
            </thead>
            <?php
                mostrarMusica();
            ?>
        </table>
    </div>
    <form action="main.html" name="voltar"> 
        <input type="submit" value="Voltar" class="fade">
    </form>
    <footer>
        <span> <strong> © 2021 Gplays </strong> Todos os direitos reservados </span>
    </footer>
</body>
</html>