<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sim</title>
</head>
<body>
    <?php
        function mostrarMusica() {
            $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
            
            if ($createConnection === false){
                echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
            }
            else {
                $getValues = "SELECT titulo, artista, genero FROM musicas";
                $resultado = mysqli_query($createConnection, $getValues);
                
                echo "<table> <tbody>";
                while($musica = mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>" . $musica['titulo'] . "</td>" . "<td>" . $musica['artista'] . "</td>" . "<td>" . $musica['genero'] . "</td>";
                    echo "</tr>";
                }
                echo "</table> </tbody>";
            }
        }
        mostrarMusica();

        /* function adicionarMusica() {
            $createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
            $t = "bruce";
            $a = "baby shark";
            $g = "billie pop";
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
        adicionarMusica(); */
    ?>
</body>
</html>

