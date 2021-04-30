<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    //Criar database
    $databaseConnection = false;
	function iniciarDatabase() { 
        $createConnection = mysqli_connect("localhost", "root","");
        if (!$createConnection) { 
            echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
        }
        else {
            // Criando base de dados
            $createDatabase = "CREATE DATABASE gabriel_musicas";

            if (mysqli_query($createConnection, $createDatabase)) {
                echo "<script> alert(\"Banco de dados criado com sucesso!\"); </script>";
                $databaseConnection = true;
            }
            else {
                echo "<script> alert(\"Erro: " . mysqli_error($createConnection) . "\"); </script>";
            }
        }
        mysqli_close($createConnection);
    }

    
    //Criar tabela
    $tabelaCreation = false;
    function gerarTabela() {
        $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");

        if ($createConnection === false){
            echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
        }
        else {
            $createTabela = "CREATE TABLE musicas (
                titulo VARCHAR(30) NOT NULL,
                artista VARCHAR(30) NOT NULL,
                genero VARCHAR(15) NOT NULL,
                link VARCHAR(100) NOT NULL
            )";
    
            if (mysqli_query($createConnection, $createTabela)){
                echo "<script> alert(\"Tabela criada com sucesso!\"); </script>";
                $tabelaCreation = true;
            } 
            else {
                echo "<script> alert(\"Erro: " . mysqli_error($createConnection) . "\"); </script>";
            }
        }
        mysqli_close($createConnection);
    }

    
    //Adicionar musica
    function adicionarMusica() {
        $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
        $t = $_POST['titulo'];
        $a = $_POST['artista'];
        $g = $_POST['genero'];
        $l = $_POST['link'];
        $l = "https://img.youtube.com/vi/" . substr($l, strpos($l,"=")+1) . "/maxresdefault.jpg";

        if ($createConnection === false) {
            echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
        }
        else {
            $inserir = "INSERT INTO musicas (titulo, artista, genero, link) VALUES ('$t', '$a', '$g', '$l')";
        
            if (mysqli_query($createConnection, $inserir)) {
                $message = "Música inserida com sucesso!";
            } 
            else {
                $message = mysqli_error($createConnection);
            }
        }
        mysqli_close($createConnection);
    }


    //Excluir musica
    function excluirMusica() {
        $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
        $entrada = "";

        if ($createConnection === false){
            echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
        }
        else {
            $excluir = "DELETE FROM musicas WHERE titulo = '$entrada'";

            if (mysqli_query($createConnection, $excluir)){
                echo "<script> alert(\"Musica excluida com sucesso!\"); </script>";
            } 
            else {
                echo "<script> alert(\"Erro: " . mysqli_error($createConnection) . "\"); </script>";
            }
        }
        mysqli_close($createConnection);
    }


    //Mostrar musicas
    function mostrarMusica() {
        $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
        
        if ($createConnection === false){
            echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
            return;
        }
        else {
            $getValues = "SELECT titulo, artista, genero, link FROM musicas ORDER BY titulo";
            $resultado = mysqli_query($createConnection, $getValues);
            
            $contador = 1;

            echo "<tbody>";
            while($musica = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td> <img src=" . $musica['link'] . "> </td>";
                echo "<td> $contador </td> <td><strong>" . ucfirst($musica['titulo']) . "</strong>" . "<span> by " . ucfirst($musica['artista']) . "</span> </td>" . "<td>" . ucfirst($musica['genero']) . "</td>";
                echo "</tr>";
                $contador++;
            }
            echo "</tbody>";
        }
    }
?>