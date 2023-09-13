<html>
	<head>
		<title> Cadastro do Atleta</title>
		<meta charset="utf-8">
	</head>
	</body>
	<?php
		include_once("conn.php");
	?>

		<form method="POST" action="processa_cad_Atleta.php">
		Atleta: <input type="text" name="txtNome"><br><br>
				<select name="selectModalidade">
					<option>Selecione a Modalidade</option>
					<?php
						$result_for = "SELECT * FROM tbModalidade";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codModalidade']; ?>"><?php echo $row_for['Modalidade']; ?></option> <?php
						}
					?>
				</select><br><br>

			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>