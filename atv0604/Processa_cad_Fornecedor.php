<?php
	include_once("conn.php");
	$for = $_POST['txrFornecedor'];
	$result_forn = "INSERT INTO tbfornecedor(nomeFornecedor) VALUES ('$for')";

	$resultado_fornecedor = mysqli_query($conn, $result_forn);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadFornecedor.php'>
					<script type=\"text/javascript\">
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadFornecedor.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>