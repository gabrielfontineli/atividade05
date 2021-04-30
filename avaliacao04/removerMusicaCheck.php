<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="img/logomarca-gabriel-musicas.ico"/>
    <link rel="stylesheet" href="src/checkRemoveMusic.css">
    <title> Musica excluida </title>
</head>
<body>
    <header>
        <a href="main.html"> <img src="img/logomarca-gabriel-musicas.png" class="grow"> </a>
    </header>
    <div class="container">
        <div class="message">
            <?php 
                function excluirMusica() {
                    $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
                    $entrada = $_POST['musica'] ?? "";

                    if ($entrada == "") {
                        echo "<img src=\"img/checkwrong.png\">";
                        echo "<p> Musica não selecionada! </p>";
                        echo "<style> 
                                .message { 
                                    box-shadow: 10px 10px 10px rgba(255, 0, 0, 0.3); 
                                } 
                                .fade:hover, .fade:focus, .fade:active {
                                    background-color: #ff0000;
                                    color: rgb(0, 0, 0);
                                }
                                form input {
                                    color: red;
                                    border: 4px solid rgb(255, 0, 0);
                                }
                                </style>";
                        return;
                    }

                    $tituloartista = explode("&", $entrada);
            
                    if ($createConnection === false){
                        echo "<img src=\"img/checkwrong.png\">";
                        echo "<p>" . mysqli_connect_error($createConnection) . "</p>";
                        echo "<style> 
                                .message { 
                                    box-shadow: 10px 10px 10px rgba(255, 0, 0, 0.3); 
                                } 
                                .fade:hover, .fade:focus, .fade:active {
                                    background-color: #ff0000;
                                    color: rgb(0, 0, 0);
                                }
                                form input {
                                    color: red;
                                    border: 4px solid rgb(255, 0, 0);
                                }
                                </style>";
                    }
                    else {
                        $excluir = "DELETE FROM musicas WHERE titulo = '$entrada[0]' AND artista = '$entrada[1]'";
            
                        if (mysqli_query($createConnection, $excluir)){
                            echo "<img src=\"img/checkright.png\">";
                            echo "<p> Musica \"$entrada\" excluída com sucesso! </p>";
                            echo "<style> 
                                    .message { 
                                        box-shadow: 10px 10px 10px rgba(0, 255, 0, 0.3); 
                                    } 
                                    .fade:hover, .fade:focus, .fade:active {
                                        background-color: #00FF00;
                                        color: rgb(0, 0, 0);
                                    }
                                    form input {
                                        color: green;
                                        border: 4px solid rgb(0, 255, 0);
                                    }
                                    </style>";
                        }
                        else {
                            echo "<img src=\"img/checkwrong.png\">";
                            echo "<p> " . mysqli_error($createConnection) . " </p>";
                            echo "<style> 
                                .message { 
                                    box-shadow: 10px 10px 10px rgba(255, 0, 0, 0.3); 
                                } 
                                .fade:hover, .fade:focus, .fade:active {
                                    background-color: #ff0000;
                                    color: rgb(0, 0, 0);
                                }
                                form input {
                                    color: red;
                                    border: 4px solid rgb(255, 0, 0);
                                }
                                </style>";
                        }
                    }
                    mysqli_close($createConnection);
                }
                excluirMusica();
            ?>
            <form action="main.html" value="voltar">
                <input type="submit" value="VOLTAR" class="fade">
            </form>
        </div>    
    </div>
</body>
</html>




