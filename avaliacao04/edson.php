<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    include 'funcoes.php';
?>
<body>
    <div class="container">
        <form action="teste.php" method="post">
            Titulo: <input type="text" name="titulo"> </p>
            Artista: <input type="text" name="artista"></p>
            Genero: <input type="text" name="genero"></p>
            Link: <input type="text" name="link"> </p>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>