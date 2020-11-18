<?php 

	require_once "../conexion.php";
	require_once "../metodosCrud.php";


	$nombre = $_POST['txtnombre'];
	$apellido = $_POST['txtapellido'];

	$datos = array($nombre, $apellido);
	$obj= new Metodos();
	if ($obj->insertarDatos($datos)==1) {
		header("Location:../index.php");
	}else{
		echo "fallo al agregar datos";
	}
	$obj->insertarDatos();	


 ?>