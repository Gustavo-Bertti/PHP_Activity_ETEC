<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="excluirFornecedor.php">
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
	$sql=mysqli_query($conn,"select * from tbfornecedor");
	while($linha=mysqli_fetch_array($sql))
	{
		$codForn=$linha['codFornecedor'];
		$nomeForn=$linha['nomeFornecedor'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo</td><td>$codForn</td>";
		echo "<tr><td>Fornecedor</td><td> $nomeForn</td></tr></table>";
	}
	
	if ($bt!='')
	{
			mysqli_query($conn,"DELETE FROM tbfornecedor WHERE codFornecedor='$cons'") or die("Erro na Exclusão");
				
			echo"<script>alert('Fornecedor Excluído')</script>";
			echo"<meta http-equiv='refresh'content='0'>";
	}
?>
</form>
</body>
</html>




