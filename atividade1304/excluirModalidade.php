<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="excluirModalidade.php">
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
	$sql=mysqli_query($conn,"select * from tbModalidade");
	while($linha=mysqli_fetch_array($sql))
	{
		$codMod=$linha['codModalidade'];
		$nomeMod=$linha['Modalidade'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo</td><td>$codMod</td>";
		echo "<tr><td>Modalidade</td><td> $nomeMod</td></tr></table>";
	}
	
	if ($bt!='')
	{
			mysqli_query($conn,"DELETE FROM tbModalidade WHERE codModalidade='$cons'") or die("Erro na Exclusão");
				
			echo"<script>alert('Modalidade Excluído')</script>";
			echo"<meta http-equiv='refresh'content='0'>";
	}
?>
</form>
</body>
</html>




