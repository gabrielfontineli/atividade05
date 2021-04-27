<?php
	
		$sql="CREATE DATABASE db_ifrn";
		if (mysqli_query($con,$sql)){
		echo "Base de Dados criada com sucesso!!";
		}else{
		echo "Erro: " .mysqli_error($con);
		}
		
?>