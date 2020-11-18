<?php 

	require_once "claseCalculadora.php";
	$calculadoraClass = new CalculadoraClass(); 


	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$opcion = $_POST['opcion'];

    echo $calculadoraClass->calcularDatos($valor1, $valor2, $opcion);


 ?>