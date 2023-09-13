<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sem título</title>
</head>
<body>
	<?php
error_reporting(0);
ini_set("display_errors", 0 );
$id = $_GET['id']; // Recebendo o valor vindo do link

require_once("conn.php");

$resultado = mysqli_query($conn,"select tbAtleta.codAtleta, tbAtleta.nomeAtleta, tbAtleta.codModalidade, tbModalidade.Modalidade from tbAtleta inner JOIN tbModalidade on tbModalidade.codModalidade = tbAtleta.codModalidade where codAtleta = '".$id."'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ 
	?>
	<form method="post" action="editar_dados2_Atleta.php" >
	<input type="hidden" name="codAtleta" value="<?php echo $linha['codAtleta']; ?>" /> <!– passando o valor da id em um campo oculto –>
	<table>

			<tr><td>Nome do Atleta:</td><td> <input type="text" name="nomeAtleta" value="<?php echo $linha['nomeAtleta']; ?>" /> </td></tr>

			<tr><td>Escolha o Modalidade</td>
				<td>
				<select name="selectModalidade">
					<option value="<?php echo $linha['codModalidade']; ?>"><?php echo $linha['Modalidade']; ?></option>
					<?php
						$result_for = "SELECT * FROM tbModalidade";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codModalidade']; ?>"><?php echo $row_for['Modalidade']; ?></option> <?php
						}
					?>
				</select>
			</td></tr>		

	</table>

			<input type="submit" value="Editar" />
	</form>
	<?php
}
?> 
</body>
</html>
