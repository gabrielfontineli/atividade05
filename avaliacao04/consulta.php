
Marcando como concluída…
<?php
	$con = mysqli_connect("localhost","root","","db_ifrn");
	if (!$con){
		echo "Erro: " . mysqli_connect_error();
		}else{
			$sql = " SELECT * FROM Pessoa ";
			$resultado = mysqli_query($con,$sql);
			echo "<h2>Pessoas</h2>";
			while($pessoa = mysqli_fetch_array($resultado)){
			echo $pessoa['nome'] . " " . $pessoa['sobrenome'].", " .
			$pessoa['idade']."anos <br>";
	}
	mysqli_close($con);
	}
?>