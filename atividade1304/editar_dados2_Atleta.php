<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Atleta</title>
</head>
<body>

	<?php
$id = $_POST['codAtleta']; // Recebendo o valor id do formulário
$nomeAtleta = $_POST['nomeAtleta'];
$codModalidade = $_POST['selectModalidade'];


require_once("conn.php");



mysqli_query($conn,"UPDATE tbAtleta SET nomeAtleta='$nomeAtleta', codModalidade='$codModalidade' WHERE codAtleta='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>
<p><a href="editarAtleta.php">  Voltar</a>
</body>

</html>