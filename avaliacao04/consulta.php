
Marcando como concluída…
<?php
	$con = mysqli_connect("localhost","root","","bd_exemplo");
	if (mysqli_connect_errno($con)){
		echo "Erro: " . mysqli_connect_error();
		}else{
			$sql = " SELECT * FROM Pessoa ";
			$resultado = mysqli_query($con,$sql);
			echo "<h2>Pessoas</h2>";
			while($pessoa = mysqli_fetch_array($resultado)){
			echo $pessoa['Nome'] . " " . $pessoa['Sobrenome'].", " .
			$pessoa['Idade']."anos <br>";
	}
	mysqli_close($con);
	}
?>