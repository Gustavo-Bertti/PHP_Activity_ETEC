<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Atleta</title>
</head>
<body>

	<?php
$id = $_POST['codModalidade']; // Recebendo o valor id do formulário
$Modalidade = $_POST['nomeMod'];

require_once("conn.php");
mysqli_query($conn,"UPDATE tbModalidade SET Modalidade='$Modalidade' WHERE codModalidade='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>


<p><a href="editarModalidade.php">  Voltar</a>
</body>
</html>
