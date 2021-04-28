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
                link VARCHAR(100) NOT NULL,
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
        $t = "edson";
        $a = "tyler the degenerator";
        $g = "edson gender";
        $l = "https://i.scdn.co/image/ab67616d00004851664034dd80e91b28f773598d";
        if ($createConnection === false){
            echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
        }
        else {
            $inserir = "INSERT INTO musicas (titulo, artista, genero, link) VALUES ('$t', '$a', '$g', '$l')";

            if (mysqli_query($createConnection, $inserir)){
                echo "<script> alert(\"Musica inserida com sucesso!\"); </script>";
            } 
            else {
                echo "<script> alert(\"Erro: " . mysqli_error($createConnection) . "\"); </script>";
            }
        }
        mysqli_close($createConnection);
    }


    //Excluir musica
    function excluirMusica() {
        $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
        $entrada = "Edson";

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
        }
        else {
            $getValues = "SELECT titulo, artista, genero, link FROM musicas";
            $resultado = mysqli_query($createConnection, $getValues);
            
            $contador = 1;

            echo "<tbody>";
            while($musica = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td> <img src=\"$musica['link']\"> </td>";
                echo "<td> $contador </td> <td><strong>" . $musica['titulo'] . "</strong>" . "<span> by " . $musica['artista'] . "</span> </td>" . "<td>" . $musica['genero'] . "</td>";
                echo "</tr>";
                $contador++;
            }
            echo "</tbody>";
        }
    }
?>