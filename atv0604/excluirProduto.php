<html>
<head>
<title>Excluir Produto</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="excluirProduto.php">
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
	
	$sql=mysqli_query($conn,"select tbproduto.codProduto, tbproduto.nomeProduto, tbfornecedor.nomeFornecedor from tbproduto inner JOIN tbfornecedor on tbfornecedor.codFornecedor = tbproduto.codFornecedor");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codProduto=$linha['codProduto'];
		$nomeProduto=$linha['nomeProduto'];
		$fornecedor=$linha['nomeFornecedor'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do Produto</td><td>$codProduto</td>";
		echo "<tr><td> Nome do Produto </td><td> $nomeProduto</td>";
		echo "<tr><td> Fornecedor </td><td> $fornecedor</td></tr></table>";
	}
	
	if ($bt!='')
	{
			mysqli_query($conn,"DELETE FROM tbproduto WHERE codProduto='$cons'") or die("Erro na Exclusão");
			
			echo " Excluído";
			
			echo"<script>alert('Produto Excluído')</script>";
			echo"<meta http-equiv='refresh'content='0'>";
	}
?>
</form>
</body>
</html>
