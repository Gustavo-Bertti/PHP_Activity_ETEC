<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sem título</title>
</head>
<body>
	<?php
error_reporting(0);
ini_set("display_errors", 0 );
$id = $_GET['id']; // Recebendo o valor vindo do link

require_once("conn.php");

$resultado = mysqli_query($conn,"select tbproduto.codProduto, tbproduto.nomeProduto, tbproduto.codFornecedor, tbfornecedor.nomeFornecedor from tbproduto inner JOIN tbfornecedor on tbfornecedor.codFornecedor = tbproduto.codFornecedor where codProduto = '".$id."'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ 
	?>
	<form method="post" action="editar_dados2_Produto.php" >
	<input type="hidden" name="codProduto" value="<?php echo $linha['codProduto']; ?>" /> <!– passando o valor da id em um campo oculto –>
	<table>

			<tr><td>Nome do produto:</td><td> <input type="text" name="nomeProduto" value="<?php echo $linha['nomeProduto']; ?>" /> </td></tr>

			<tr><td>Escolha o fornecedor</td>
				<td>
				<select name="selectFornecedor">
					<option value="<?php echo $linha['codFornecedor']; ?>"><?php echo $linha['nomeFornecedor']; ?></option>
					<?php
						$result_for = "SELECT * FROM tbfornecedor";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codFornecedor']; ?>"><?php echo $row_for['nomeFornecedor']; ?></option> <?php
						}
					?>
				</select>
			</td></tr>		

	</table>

			<input type="submit" value="Editar" />
	</form>
	<?php
}
?> 
</body>
</html>
