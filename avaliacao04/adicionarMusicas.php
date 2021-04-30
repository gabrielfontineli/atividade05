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
    <div class="container">
        <div class="message">
            <?php 
                function adicionarMusica() {
                    $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
                    $t = $_POST['titulo'] ?? "";
                    $a = $_POST['artista'] ?? "";
                    $g = $_POST['genero'] ?? "";
                    $l = $_POST['link'] ?? "";

                    if ($t == "" || $a == "" || $g == "" || $l == "") {
                        throw new Exception("Valor não preenchido");
                    }
                    
                    $l = "https://img.youtube.com/vi/" . substr($l, strpos($l,"=")+1) . "/maxresdefault.jpg";
            
                    if ($createConnection === false) {
                        echo "<p>" . mysqli_connect_error($createConnection) . "</p>";
                        echo "<img src=\"img/checkwrong.png\">";
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
                            echo "<p> Algo aconteceu! </p>";
                            echo "<img src=\"img/checkwrong.png\">";
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
        </div>    
    </div>
    <form action="main.html" value="voltar">
        <input type="submit" value="VOLTAR">
    </form>
</body>
</html>




