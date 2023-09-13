<?php
	include_once("conn.php");

	$nome = $_POST['txtNome'];
	$codModalidade = $_POST['selectModalidade'];

	$result_mod = "INSERT INTO tbAtleta(nomeAtleta, codModalidade) VALUES ('$nome','$codModalidade')";

	$result_Modalidade = mysqli_query($conn, $result_mod);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAtleta.php'>
					<script type=\"text/javascript\">
						alert(\"Atleta cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAtleta.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
