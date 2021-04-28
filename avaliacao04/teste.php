<?php
$createConnection = mysqli_connect("localhost", "root", "", "gabriel_musicas");
$t = $_POST['titulo'];
$a = $_POST['artista'];
$g = $_POST['genero'];
$l = $_POST['link'];
$l = "https://img.youtube.com/vi/".substr($l, strpos($l,"=")+1)."/maxresdefault.jpg";
if ($createConnection === false) {
    echo "<script> alert(\"Erro ao conectar: " . mysqli_connect_error($createConnection) . "\"); </script>";
} else {
    $inserir = "INSERT INTO musicas (titulo, artista, genero, link) VALUES ('$t', '$a', '$g', '$l')";

    if (mysqli_query($createConnection, $inserir)) {
        echo "<script> alert(\"Musica inserida com sucesso!\"); </script>";
    } else {
        echo "<script> alert(\"Erro: " . mysqli_error($createConnection) . "\"); </script>";
    }
}
mysqli_close($createConnection);?>
<a href="tabelamusicas.php">voltar para a tabela</a>
