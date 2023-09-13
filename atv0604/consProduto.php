<html>
<head>
<title>Consulta do Fornecedor</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
Listagem de fornecedores

<form name="form1" method="post" action="teste_seleciona.php">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from tbfornecedor");
	









	while($linha=mysqli_fetch_array($sql))
	{
		$codForn=$linha['codFornecedor'];
		$nomeForn=$linha['nomeFornecedor'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo</td><td>$codForn</td>";
		echo "<tr><td>Fornecedor</td><td> $nomeForn</td></tr></table>";
	}
	
?>
</form>
</body>
</html>

