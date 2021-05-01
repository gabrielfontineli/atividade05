<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="src/databaseStyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="img/logomarca-gabriel-musicas.ico"/>
    <title> Confirmacao </title>
</head>
<body>
    <header>
        <a href="main.html"> <img src="img/logomarca-gabriel-musicas.png" class="grow"> </a>
    </header>
    <div class="container">
        <div class="message">
            <?php
                function iniciarDatabase() { 
                    $createConnection = mysqli_connect("localhost", "root","");
                    if (!$createConnection) { 
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
                        $createDatabase = "CREATE DATABASE gabriel_musicas";
            
                        if (mysqli_query($createConnection, $createDatabase)) {
                            echo "<img src=\"img/checkright.png\">";
                            echo "<p> Banco de dados criado! </p>";
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
                            if (mysqli_error($createConnection) == "Can't create database 'gabriel_musicas'; database exists") {
                                echo "<p> Banco de dados ja existente! </p>";
                            }
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

                function gerarTabela() {
                    $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
                    
                    if ($createConnection === false){
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
                        echo "<p>" . mysqli_connect_error($createConnection) . "</p>";
                    }
                    else {
                        $createTabela = "CREATE TABLE musicas (
                            titulo VARCHAR(30) NOT NULL,
                            artista VARCHAR(30) NOT NULL,
                            genero VARCHAR(15) NOT NULL,
                            link VARCHAR(100) NOT NULL
                        )";
                
                        if (mysqli_query($createConnection, $createTabela)){
                            echo "<p> Tabela criada com sucesso! </p>";
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
                            if (mysqli_error($createConnection) == "Table 'musicas' already exists") {
                                echo "<p> Tabela ja criada! </p>";
                            }
                        }
                    }
                    mysqli_close($createConnection);
                }

                iniciarDatabase();
                gerarTabela();
            ?>
            <form action="main.html" name="voltar">
                <input type="submit" value="VOLTAR" class="fade">
            </form>
        </div>
    </div>
</body>
</html>

