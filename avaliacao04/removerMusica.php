<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="img/logomarca-gabriel-musicas.ico"/>
    <link rel="stylesheet" href="src/removeMusicStyle.css">
    <title>Inserir Musica</title>
</head>
<body>
    <div class="container">
        <header>
            <a href="main.html"> <img src="img/logomarca-gabriel-musicas.png" class="grow"> </a>
        </header>
        <div class="background">
            <img src="img/pessoaouvindomusica3.png">
            <div class="back-color"> 
                <div class="logomarca">
                    <img src="img/logomarca-gabriel-musicas.png">
                    <h1> GMUSIC </h1>
                </div>
            </div>
        </div>
        <div class="adicionar">
            <h1> Remover música </h1>
        <form action="http://localhost/webdesign-2021/avaliacao04/removerMusicaCheck.php" method="post">
            <table>
                <tr>
                    <td>
                        <select name="musica">
                            <option value=""> </option>
                            <?php
                                function mostrarMusica() {
                                    $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
                                    
                                    if ($createConnection === false){
                                        echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
                                    }
                                    else {
                                        $getValues = "SELECT titulo, artista FROM musicas";
                                        $resultado = mysqli_query($createConnection, $getValues);
                            
                                        while($musica = mysqli_fetch_array($resultado)){
                                            echo "<option value=\"" . $musica['titulo'] . "&" . $musica['artista'] . "\">" . $musica['titulo'] . " (" . $musica['artista'] . ")" . "</option>";
                                        }
                                    }
                                }
                                mostrarMusica();
                            ?>
                        </select>
                    </td>
                    <td id="botao">
                        <input type="submit" value="Remover" class="fade">
                    </td>
                </tr>
            </table>
        </form>
            <footer>
                <span> <strong> © 2021 Gplays </strong> Todos os direitos reservados </span>
            </footer>
        </div>
    </div>
</body>

</html>