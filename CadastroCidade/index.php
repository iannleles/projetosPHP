<?php include("./conexao.php"); 

$consulta = "SELECT * FROM cidade";
$con = $mysqli->query($consulta) or die ($mysli->error);

?>

<html>
	<head>
		<meta charset="utf8">
	</head>

	<body>
	<table>
		<tr>
			<td>Codigo</td>
			<td>Nome</td>
			<td>Sigla</td>			
		</tr>
		<?php while($dado = $con->fetch_array()){?> 
		<tr>
			<td><?php echo $dado["cid_codigo"]; ?></td>
			<td></td>
			<td></td>			
		</tr>
		<?php } ?>
	</body>

</html>