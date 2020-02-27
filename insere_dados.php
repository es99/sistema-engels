<!DOCTYPE html>
<html>
<head>
	<title>Sistema-Engels</title>
</head>
<body>
	<?php include 'conexao.php'; ?>
	<?php
		$cafeina = $_POST['cafeina'];
		$treino = $_POST['treino'];
		$master = $_POST['mast'];
		$leitura = $_POST['leitura'];
		$estudo = $_POST['estudo'];
		$refrigerante = $_POST['refrigerante'];
		$pos_treino = $_POST['pos_treino'];
		$alcool = $_POST['alcool'];
		$guitarra = $_POST['guitarra'];
		$fotografia = $_POST['fotografia'];
		$acucar = $_POST['acucar'];

		$query = "INSERT INTO datas (data, cafeina, treino, master, leitura, estudo, refrigerante,
		pos_treino, alcool, guitarra, fotografia, acucar) VALUES 
		(NOW(), '$cafeina', '$treino', '$master', '$leitura', '$estudo', '$refrigerante', 
		'$pos_treino', '$alcool', '$guitarra', '$fotografia', '$acucar')";

		$result = mysqli_query($conn, $query);

		if($result){
			echo "Dados inseridos no banco de dados.";
		}else{
			echo "Erro ao inserir dados, tente novamente.";
		}
		mysqli_close($conn);
	?>
</body>
</html>