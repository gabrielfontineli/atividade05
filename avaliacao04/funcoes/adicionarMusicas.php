<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Musica inserida </title>
</head>
<body>
    <h1>
        <?php 
            function adicionarMusica() {
                $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
                $t = $_POST['titulo'];
                $a = $_POST['artista'];
                $g = $_POST['genero'];
                $l = $_POST['link'];
                $l = "https://img.youtube.com/vi/" . substr($l, strpos($l,"=")+1) . "/maxresdefault.jpg";
        
                if ($createConnection === false) {
                    echo mysqli_connect_error($createConnection);
                }
                else {
                    $inserir = "INSERT INTO musicas (titulo, artista, genero, link) VALUES ('$t', '$a', '$g', '$l')";
                
                    if (mysqli_query($createConnection, $inserir)) {
                        echo "Música inserida com sucesso!";
                    } 
                    else {
                        echo mysqli_error($createConnection);
                    }
                }
                mysqli_close($createConnection);
            }
            adicionarMusica();
        ; ?>
    </h1>
    <form action="../main.html" value="voltar">
        <input type="submit" value="Voltar">
    </form>
</body>
</html>




