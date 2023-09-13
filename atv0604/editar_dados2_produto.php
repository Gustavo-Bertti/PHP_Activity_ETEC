<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Produto</title>
</head>
<body>

	<?php
$id = $_POST['codProduto']; // Recebendo o valor id do formulário
$nomeProduto = $_POST['nomeProduto'];
$codFornecedor = $_POST['selectFornecedor'];


require_once("conn.php");



mysqli_query($conn,"UPDATE tbproduto SET nomeProduto='$nomeProduto', codFornecedor='$codFornecedor' WHERE codProduto='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>
<p><a href="editarProduto.php">  Voltar</a>
</body>

</html>