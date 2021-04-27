<?php
	$con = mysqli_connect("localhost", "root","");
	if (mysqli_connect_error($con)){
		echo "Erro ao conectar com a base de dados: ".
		mysqli_connect_error();
	}else{
		// Criando base de dados
		$sql="CREATE DATABASE db_ifrn";
		if (mysqli_query($con,$sql)){
		echo "Base de Dados criada com sucesso!!";
		}else{
		echo "Erro: " .mysqli_error($con);
		}
		mysqli_close($con);
	}
?>