<html>
	<head>
		<title> Cadastro de Produtos</title>
		<meta charset="utf-8">
	</head>
	</body>
	<?php
		include_once("conn.php");
	?>

		<form method="POST" action="processa_cad_Produto.php">
		Produto: <input type="text" name="txtNome"><br><br>
				<select name="selectFornecedor">
					<option>Selecione o fornecedor</option>
					<?php
						$result_for = "SELECT * FROM tbfornecedor";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codFornecedor']; ?>"><?php echo $row_for['nomeFornecedor']; ?></option> <?php
						}
					?>
				</select><br><br>

			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>