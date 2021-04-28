<?php 
    $con = mysqli_connect("localhost", "root", "", "db_ifrn");
    if(!$con){
        echo "Erro: ". mysqli_connect_error();
    }else {
        $sql = "INSERT INTO pessoa VALUES ('$_POST[nome]', 
                '$_POST[sobrenome]', $_POST[idade])";
        if (mysqli_query($con, $sql)){
            echo "Pessoa inserida com sucesso!!!";
        }else {
            echo "Erro: ". mysqli_error($con);
        }
        mysqli_close($con);
    }
?>