<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Produto</title>
</head>
<body>

	<?php
$id = $_POST['codFornecedor']; // Recebendo o valor id do formulário
$fornecedor = $_POST['nomeForn'];

require_once("conn.php");
mysqli_query($conn,"UPDATE tbfornecedor SET nomeFornecedor='$fornecedor' WHERE codFornecedor='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>


<p><a href="editarFornecedor.php">  Voltar</a>
</body>
</html>
