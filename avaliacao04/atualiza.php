<?php
	$con = mysqli_connect("localhost","root","","bd_exemplo");
	if (mysqli_connect_errno($con)){
		echo "Erro: " . mysqli_connect_error();
	}else{
		$sql1 = "UPDATE Pessoa SET nome = 'Laura', sobrenome = 'Waleska', idade='17' WHERE nome = 'Laura' ";
		mysqli_query($con,$sql1);
		$sql2 = "SELECT * FROM Pessoa";
		$resultado = mysqli_query($con,$sql2);
		echo "<h2>Pessoas</h2>";
		while($pessoa = mysqli_fetch_array($resultado)){
			echo $pessoa['Nome'] . " " . $pessoa['Sobrenome'].", " . $pessoa['Idade']."anos <br>";
		}
		mysqli_close($con);
	}
?>