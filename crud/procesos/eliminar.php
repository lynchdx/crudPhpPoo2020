<?php 

	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$id=$_GET['id'];

	$obj= new Metodos();
	if ($obj->eliminarDatos($id)==1) {
		header("Location:../index.php");
	}else{
		echo "fallo al agregar datos";
	}



 ?>