<?php
	$con = mysqli_connect("localhost", "root","");
	$sql="DROP DATABASE db_ifrn";
	if (mysqli_query($con,$sql)){
		echo "Base de Dados removida com sucesso!!";
	}else{
		echo "Erro: " .mysqli_error($con);
		}
		mysqli_close($con);
?>