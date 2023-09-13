<html>
<head>
<title>Consulta do Modalidade</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
Listagem de Modalidades

<form name="form1" method="post" action="teste_seleciona.php">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from tbModalidade");
	









	while($linha=mysqli_fetch_array($sql))
	{
		$codMod=$linha['codModalidade'];
		$nomeMod=$linha['Modalidade'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo</td><td>$codMod</td>";
		echo "<tr><td>Modalidade</td><td> $nomeMod</td></tr></table>";
	}
	
?>
</form>
</body>
</html>

