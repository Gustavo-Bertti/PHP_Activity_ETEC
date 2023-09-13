<?php
	include_once("conn.php");

	$nome = $_POST['txtNome'];
	$codFornecedor = $_POST['selectFornecedor'];

	$result_forn = "INSERT INTO tbProduto(nomeProduto, codFornecedor) VALUES ('$nome','$codFornecedor')";

	$result_fornecedor = mysqli_query($conn, $result_forn);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProduto.php'>
					<script type=\"text/javascript\">
						alert(\"Produto cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProduto.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
