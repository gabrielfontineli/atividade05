<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Atividade Aula 21 </title>
</head>
<?php
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $estado = $_POST['estado'];
        $data = $_POST['data'];
        $genero = $_POST['sexo'];
        $cinema = isset($_POST['cinema']) ? $_POST['cinema'] : "";
        $musica = isset($_POST['musica']) ? $_POST['musica'] : "";
        $tech = isset($_POST['tech']) ? $_POST['tech'] : "";
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $confirmSenha = $_POST['senhaCheck'];
        $checkValues = true;
        $display = "inline";

        if ($senha != $confirmSenha || $senha == "") $senha = "n/a";
        else if ($nome == "" || $cpf == "" || $endereco == "" || $estado == "" || $data == "" || $genero == "" || $login == "") 
            $checkValues = false;
        else if ($cinema == "" && $musica == "" && $tech == "") $checkValues = false;

        if ($checkValues == false) $display = "none";

    ?>
<body>
    <h1>
        <table>
            <tr>
                <td> Nome: </td>
                <td> <?php echo $nome; ?> </td>
            </tr>
            <tr>
                <td> CPF: </td>
                <td> <?php echo $cpf; ?> </td>
            </tr>
            <tr>
                <td> Endereço</td>
                <td> <?php echo $endereco; ?> </td>
            </tr>
            <tr>
                <td> Estado: </td>
                <td> <?php echo $estado; ?> </td>
            </tr>
            <tr>
                <td> Data: </td>
                <td> <?php echo $data ?> </td>
            </tr>
            <tr>
                <td> Gênero: </td>
                <td> <?php echo $genero ?> </td>
            </tr>
            <tr>
                <td> Hobbies: </td>
                <td> <?php echo $cinema . "\n" . $musica . "\n" . $tech; ?></td>
            </tr>
            <tr>
                <td> Login: </td>
                <td> <?php echo $login ?> </td>
            </tr>
            <tr>
                <td> Senha: </td>
                <td> <?php echo $senha; ?> </td>
            </tr>
        </table>
    </h1>
</body>
<style>
    table {
        border: 2px solid black;
        border-collapse: collapse;
        display: <?php echo $display; ?>;
    }
    tr {
        border: 2px solid black;
    }
    td {
        border: 2px solid black;
    }
    </style>
</html>