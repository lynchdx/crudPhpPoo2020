<?php 
	require_once "conexion.php";
	require_once "metodosCrud.php";
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
		<form action="procesos/insertar.php" method="post">
			<label>Nombre</label>
			<input type="text" name="txtnombre" autocomplete="off"><br>
			<label>Apellido</label>
			<input type="text" name="txtapellido" autocomplete="off"><br>
			<button>Agregar</button>
		</form>

	<br><br>




	<table border="1">
	<tr>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Actualizar</td>
		<td>Eliminar</td>
	</tr>
		<?php 
			$obj = new Metodos();
			$query="SELECT id,nombre,apellido FROM persona";
			$datos=$obj->mostrarDatos($query);

			foreach ($datos as $key) {
			
		 ?>
	<tr>
		<td><?php echo $key['nombre'];?></td>
		<td><?php echo $key['apellido'];?></td>
		<td><a href="editar.php?id=<?php echo $key['id']?>">Editar</a></td>
		<td><a href="procesos/eliminar.php?id=<?php echo $key['id']?>">Eliminar</a></td>
	</tr>
	<?php 
		}
	 ?>
	</table>

</body>
</html>