<?php 

	class Metodos{

		public function mostrarDatos($query){
			$conn = new Conexion();
			$conexion = $conn->conectar(); 


			$result = mysqli_query($conexion, $query);

			//trae todo los datos en un arreglo asociativo.
			return mysqli_fetch_all($result, MYSQLI_ASSOC);


		}



		public function insertarDatos($datos){
			$conn = new Conexion();
			$conexion = $conn->conectar(); 

			$query = "INSERT INTO persona (nombre, apellido) values ('$datos[0]','$datos[1]' )";

			return $result=mysqli_query($conexion,$query);
		}



		public function actualizarDatos($datos){
			$conn = new Conexion();
			$conexion = $conn->conectar(); 

			$query = "UPDATE persona set nombre='$datos[0]', apellido='$datos[1]' WHERE id='$datos[2]'";

			return $result=mysqli_query($conexion,$query);

		}


		public function eliminarDatos($id){
			$conn = new Conexion();
			$conexion = $conn->conectar(); 

			$query= "DELETE FROM persona where id='$id'";
			return $result=mysqli_query($conexion,$query);

		}

	}


 ?>