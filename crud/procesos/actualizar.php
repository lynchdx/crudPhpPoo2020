<?php 

	require_once "../conexion.php";
	require_once "../metodosCrud.php";


	$nombre = $_POST['txtnombre'];
	$apellido = $_POST['txtapellido'];
	$id = $_POST['id'];

	$datos = array($nombre, $apellido, $id);
	$obj= new Metodos();

	if ($obj->actualizarDatos($datos)==1) {
		header("Location:../index.php");
	}else{
		echo "fallo al actualizar datos";
	}
	



 ?>