<?php 
	
	require_once "conexion.php";
	$obj = new Conexion();
	$conexion = $obj->conectar();
	$id=$_GET['id'];
	$sql = "SELECT nombre, apellido FROM persona WHERE id='$id'";
	$result=mysqli_query($conexion, $sql);
	$ver=mysqli_fetch_row($result);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		
	<!--Se envia por post a actualiza.php-->	
	<form action="procesos/actualizar.php" method="post">
			<label>Nombre</label>
			<input type="text" name="txtnombre" autocomplete="off" value="<?php echo $ver[0]?>"><br>
			<label>Apellido</label>
			<input type="text" name="txtapellido" autocomplete="off" value="<?php echo $ver[1]?>"><br>
			<button>Agregar</button>
			<input type="text" hidden="" value="<?php echo $id ?>" name="id">
		</form> 


</body>
</html>