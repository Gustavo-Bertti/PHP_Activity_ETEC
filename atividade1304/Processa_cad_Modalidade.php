<?php
	include_once("conn.php");
	$Mod = $_POST['txrModalidade'];
	$result_Mod = "INSERT INTO tbModalidade(Modalidade) VALUES ('$Mod')";

	$resultado_Modalidade = mysqli_query($conn, $result_Mod);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadModalidade.php'>
					<script type=\"text/javascript\">
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadModalidade.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
