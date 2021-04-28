<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    include 'funcoes.php';
    iniciarDatabase();
    gerarTabela();
    adicionarMusica();

?>
<body>
    <div class="container">
        <table style="display: table;">
            <thead>
                <tr>
                    <th colspan="2"></th>
                    <th class="titulo">Titulo</th>
                    <th class="genero">Genero</th>
                </tr>
            </thead>
            <?php
                mostrarMusica();
            ?>
        </table>
    </div>
</body>

</html>