<html>
<head>
<title>Excluir Atleta</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="excluirAtleta.php">
  <p> 
    <input type="text" name="txt_cod">
  </p>
  <p> 
    <input type="submit" name="bt" value="Confirma">
  </p>
  <p>
<?php

	error_reporting(0);
	ini_set("display_errors", 0 );

	$cons=$_POST['txt_cod'];
	$bt=$_POST['bt'];
	
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select tbAtleta.codAtleta, tbAtleta.nomeAtleta, tbModalidade.Modalidade from tbAtleta inner JOIN tbModalidade on tbModalidade.codModalidade = tbAtleta.codModalidade");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codAtleta=$linha['codAtleta'];
		$nomeAtleta=$linha['nomeAtleta'];
		$Modalidade=$linha['Modalidade'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do Atleta</td><td>$codAtleta</td>";
		echo "<tr><td> Nome do Atleta </td><td> $nomeAtleta</td>";
		echo "<tr><td> Modalidade </td><td> $Modalidade</td></tr></table>";
	}
	
	if ($bt!='')
	{
			mysqli_query($conn,"DELETE FROM tbAtleta WHERE codAtleta='$cons'") or die("Erro na Exclusão");
			
			echo " Excluído";
			
			echo"<script>alert('Atleta Excluído')</script>";
			echo"<meta http-equiv='refresh'content='0'>";
	}
?>
</form>
</body>
</html>
