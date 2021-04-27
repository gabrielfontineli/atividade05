<?php
	// Criando conexão com a base de dados bd_ifsp
	$con = mysqli_connect("localhost","root","","bd_exemplo");

	// Check connection
	if (mysqli_connect_errno()){
	echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
	}
	$sql = "DELETE FROM Pessoa WHERE Nome ='Helder'";
	mysqli_query($con,$sql);
	echo "Registro excluído com sucesso!";
	mysqli_close($con);
?>