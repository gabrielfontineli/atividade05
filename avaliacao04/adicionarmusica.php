<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="img/logomarca-gabriel-musicas.ico"/>
    <link rel="stylesheet" href="src/musicStyle.css">
    <title>Inserir Musica</title>
</head>
<body>
    <div class="container">
        <form action="http://localhost/webdesign-2021/avaliacao04/funcoes/adicionarMusicas.php" method="post">
            Titulo: <input type="text" name="titulo"> </p>
            Artista: <input type="text" name="artista"></p>
            Genero: <input type="text" name="genero"></p>
            Link: <input type="text" name="link"> </p>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>