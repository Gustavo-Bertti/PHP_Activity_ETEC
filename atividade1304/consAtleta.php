<html>
<head>
<title>Consulta do Modalidade</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
Listagem de Atletas

<form name="form1" method="post" action="teste_seleciona.php">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from tbAtleta");
	









	while($linha=mysqli_fetch_array($sql))
	{
		$codAtleta=$linha['codAtleta'];
		$nomeAtleta=$linha['nomeAtleta'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo</td><td>$codAtleta</td>";
		echo "<tr><td>Atleta</td><td> $nomeAtleta</td></tr></table>";
	}
	
?>
</form>
</body>
</html>

