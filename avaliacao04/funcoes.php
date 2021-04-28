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
                genero VARCHAR(15) NOT NULL
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
        if ($createConnection === false){
            echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
        }
        else {
            $inserir = "INSERT INTO musicas (titulo, artista, genero) VALUES ('$t', '$a', '$g')";

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
            $getValues = "SELECT titulo, artista, genero FROM musicas";
            $resultado = mysqli_query($createConnection, $getValues);

            if (mysqli_num_rows)
        }
    }

        //Conectar a Database
        $connect = mysqli_connect("localhost", "root", "", "db_ifrn");

        //Checando a conexão
        if (!$con){
            echo "Erro ao conectar com a base de dados: " . mysqli_connect_error();
        }
        else{
            echo "Banco conectado com sucesso!" . '<br>';
            //Fechando a conexão com o banco
            mysqli_close($con);
            echo "Conexão fechada por segurança";
        }
}
?>