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
$resultado = mysqli_query($conn,"select * from tbfornecedor where codFornecedor = '".$id."'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ 
	?>
	<form method="post" action="editar_dados2_Fornecedor.php" >
	<input type="hidden" name="codFornecedor" value="<?php echo $linha['codFornecedor']; ?>" /> <!– passando o valor da id em um campo oculto –>
	<table>

			<tr><td>Fornecedor:</td><td> <input type="text" name="nomeForn" value="<?php echo $linha['nomeFornecedor']; ?>" /> </td></tr>	

	</table>

			<input type="submit" value="Editar" />
	</form>
	<?php
}
?> 
</body>
</html>



