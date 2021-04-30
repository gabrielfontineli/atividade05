<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="img/logomarca-gabriel-musicas.ico"/>
    <link rel="stylesheet" href="src/checkAddMusic.css">
    <title> Musica inserida </title>
</head>
<body>
    <header>
        <a href="main.html"> <img src="img/logomarca-gabriel-musicas.png" class="grow"> </a>
    </header>
    <div class="container">
        <div class="message">
            <?php 
                function adicionarMusica() {
                    $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
                    $t = strtolower($_POST['titulo']) ?? "";
                    $a = strtolower($_POST['artista']) ?? "";
                    $g = $_POST['genero'] ?? "";
                    $l = $_POST['link'] ?? "";

                    if ($t == "" || $a == "" || $g == "" || $l == "") {
                        echo "<img src=\"img/checkwrong.png\">";
                        echo "<p> Espacos em branco! </p>";
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
                    
                    $l = "https://img.youtube.com/vi/" . substr($l, strpos($l,"=")+1) . "/maxresdefault.jpg";
            
                    if ($createConnection === false) {
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
                        $inserir = "INSERT INTO musicas (titulo, artista, genero, link) VALUES ('$t', '$a', '$g', '$l')";
                    
                        if (mysqli_query($createConnection, $inserir)) {
                            echo "<img src=\"img/checkright.png\">";
                            echo "<p> Musica inserida com sucesso! </p>";
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
                            echo "<p> Algo aconteceu! </p>";
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

                adicionarMusica();
            ?>
            <form action="main.html" value="voltar">
                <input type="submit" value="VOLTAR" class="fade">
            </form>
        </div>    
    </div>
</body>
</html>




