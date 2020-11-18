<?php 

	class Conexion{
		private $host = "localhost";
		private $user = "root";
		private $bd = "crudphppoo";
		private $pass = "";


		public function conectar(){

			$con = mysqli_connect($this->host,
								  $this->user,
								  $this->pass,
								  $this->bd);
			return $con;
		}
	}



	$conexion = new Conexion();

	if ($conexion->conectar()) {
		echo "Conextado con éxito";
	}else{
		echo "Fallo al conectar";
	}

 ?>