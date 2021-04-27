<?php

	//Criando uma conexão com o banco de dados
	$con = mysqli_connect("localhost", "root", "", "db_ifrn");

	//Checando a conexão
	if (!$con){
		echo "Erro ao conectar com a base de dados: " . mysqli_connect_error();
	}else{
		echo "Banco conectado com sucesso!" . '<br>';
		//Fechando a conexão com o banco
		mysqli_close($con);
		echo "Conexão fechada por segurança";
	}


?>