<html>
<head>
<title>Editar Atleta</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form name="form1" method="post" action="editar_dados_Atleta.php">
<?php
error_reporting(0);
ini_set("display_errors", 0 );
require_once("conn.php");
$resultado = mysqli_query($conn,"select tbAtleta.codAtleta, tbAtleta.nomeAtleta, tbModalidade.Modalidade from tbAtleta inner JOIN tbModalidade on tbModalidade.codModalidade = tbAtleta.codModalidade"); // Há variável $resultado faz uma consulta em nossa tabela selecionando todos os registros de todos os campos





while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ //Inicia o loop
	?> <a href="editar_dados_Atleta.php?id=<?php echo $linha['codAtleta']; ?>"> <!– passando o valor do id para a página editar1.php –>
	<?php
	echo $linha['codAtleta'] . " - " . $linha['nomeAtleta'] . " - " . $linha['Modalidade']; // Mostra o valor do registro dentro do loop
	echo "<br />"; 
} // Retorna para o início do loop caso existam mais registros a serem mostrados
?>
</a>

</form>
</body>
</html>