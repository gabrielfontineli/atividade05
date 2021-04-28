<?php
    include 'funcoes.php';

    iniciarDatabase();
    gerarTabela();

    $redirect = "../main.html";
    header('Location: ' . $redirect);
?>
