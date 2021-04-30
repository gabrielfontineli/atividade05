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
            <img src="img/pessoaouvindomusica4.png">
            <div class="back-color"> 
                <div class="logomarca">
                    <img src="img/logomarca-gabriel-musicas.png">
                    <h1> GMUSIC </h1>
                </div>
            </div>
        </div>
        <div class="adicionar">
            <h1> Editar música </h1>
        <form action="http://localhost/webdesign-2021/avaliacao04/editarMusica.php" method="post">
            <table>
                <tr>
                    <td>
                        <select name="musica">
                            <option value=""> </option>
                            <?php
                                function editarMusica() {
                                    $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
                                    
                                    if ($createConnection === false){
                                        echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
                                    }
                                    else {
                                        $getValues = "SELECT titulo, artista FROM musicas ORDER BY titulo";
                                        $resultado = mysqli_query($createConnection, $getValues);
                            
                                        while($musica = mysqli_fetch_array($resultado)){
                                            echo "<option value=\"" . $musica['titulo'] . "&" . $musica['artista'] . "\">" . $musica['titulo'] . " (" . $musica['artista'] . ")" . "</option>";
                                        }
                                    }
                                }
                                editarMusica();
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Titulo: </label>   
                        <input type="text" name="titulo" placeholder="Insira o título">
                    </td>
                    <td>
                        <label> Artista: </label> 
                        <input type="text" name="artista" placeholder="Insira o artista">
                    </td>
                    <td>
                        <label> Genero: </label>
                        <select name="genero">
                            <option value=""> </option>
                            <option value="sertanejo"> Sertanejo </option>
                            <option value="pop"> Pop </option>
                            <option value="rock"> Rock </option>
                            <option value="Folk"> Folk </option>
                            <option value="hip hop"> Hip Hop </option>
                            <option value="forro"> Forró </option>
                            <option value="trap"> Trap </option>
                            <option value="eletronica"> Eletrônica </option>
                            <option value="rap"> Rap </option>
                            <option value="indie"> Indie </option>
                            <option value="heavy metal"> Heavy Metal </option>
                            <option value="funk"> Funk </option>
                            <option value="pagode"> Pagode </option>
                            <option value="gospel"> Gospel </option>
                            <option value="classica"> Clássica </option>
                            <option value="reggae"> Reggae </option>
                            <option value="MPB"> MPB </option>
                        </select>
                    </td>
                    <td>
                        <label> Link: </label> 
                        <input type="text" name="link" placeholder="Insira o link">
                    </td>
                </tr>
                <tr>
                    <td colspan="4" id="botao">
                        <input type="submit" value="Adicionar" class="fade">
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