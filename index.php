<!DOCTYPE html>
<html>
<head>
	<title>Sistema-Engels</title>
	<meta charset="utf-8">
	<style>
		table, tr{
			width: 100%;
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<header>
		<h1>Sistema de coleta de dados diários</h1>
	</header>
	<main>
		<section>
			<h2>Inserção de dados</h2>
			<article>
				<form action="insere_dados.php" method="POST">
					<table>
						<tr>
							<th><p>Cafeína</p></th>
							<th><p>Treino</p></th>
							<th><p>Master</p></th>
							<th><p>Leitura</p></th>
							<th><p>Estudo</p></th>
						</tr>
						<tr>
							<td>
								<input type="radio" id="sim" name="cafeina" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="cafeina" value="nao">
								<label for="nao">Não</label><br />
							</td>
							<td>
								<input type="radio" id="sim" name="treino" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="treino" value="nao">
								<label for="nao">Não</label><br />
							</td>
							<td>
								<input type="radio" id="sim" name="mast" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="mast" value="nao">
								<label for="nao">Não</label><br />
							</td>
							<td>
								<input type="radio" id="sim" name="leitura" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="leitura" value="nao">
								<label for="nao">Não</label><br />
							</td>
							<td>
								<input type="radio" id="sim" name="estudo" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="estudo" value="nao">
								<label for="nao">Não</label><br />
							</td>
						</tr>
						<tr>
							<th><p>Refrigerante</p></th>
							<th><p>Pós-treino</p></th>
							<th><p>Álcool</p></th>
							<th><p>Guitarra</p></th>
							<th><p>Fotografia</p></th>
						</tr>
						<tr>
							<td>
								<input type="radio" id="sim" name="refrigerante" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="refrigerante" value="nao">
								<label for="nao">Não</label>
							</td>
							<td>
								<input type="radio" id="sim" name="pos_treino" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="pos_treino" value="nao">
								<label for="nao">Não</label><br />
							</td>
							<td>
								<input type="radio" id="sim" name="alcool" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="alcool" value="nao">
								<label for="nao">Não</label><br />
							</td>
							<td>
								<input type="radio" id="sim" name="guitarra" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="guitarra" value="nao">
								<label for="nao">Não</label><br />
							</td>
							<td>
								<input type="radio" id="sim" name="fotografia" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="fotografia" value="nao">
								<label for="nao">Não</label><br />
							</td>
						</tr>
						<tr>
							<th><p>Açucar</p></th>
						</tr>
						<tr>
							<td>
								<input type="radio" id="sim" name="acucar" value="sim">
								<label for="sim">Sim</label><br />
								<input type="radio" id="nao" name="acucar" value="nao">
								<label for="nao">Não</label><br />
							</td>
						</tr>
					</table>
					<input type="submit" value="Enviar" name="submit">
				</form>
			</article>
		</section>
	</main>
	<footer>
		<p>&copy; Engels Souza</p>
	</footer>
</body>
</html>