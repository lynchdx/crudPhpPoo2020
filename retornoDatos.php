<?php 

	class RetornoDatos{

		//tipo string
		//tipo entero
		//tipo arreglo
		//tipo json


		//return string
		public function esMayorDeEdad($edad){
		if ($edad > 18) {
			return "Es mayor de edad";
		}else{
			return "Es menor de edad";
		}

		}


		//return entero
		public function retornarEntero($valor){
			if ($valor > 0) {
				return 1;
			}else{
				return 0;
			}

		}


		//return arreglo
		public function retornarArrelgo($valorete){
			$datos=array();

			for ($i=0; $i < $valorete ; $i++) { 
				$datos[$i]=$i;				
			}

			return $datos;
		}


		//retornar un json
		public function retornarJson(){
			$arreglo = array(
				"hdd" => 500,
				"pantalla" => 21,
				"ram" => 8
			);

			return json_encode($arreglo); 
		}

	}


	$retornoDatos = new RetornoDatos();
	
	var_dump($retornoDatos->esMayorDeEdad(20));
	echo "<br>";
	echo($retornoDatos->retornarEntero(-5));
	echo "<br>";
	var_dump($retornoDatos->retornarArrelgo(10));
	echo "<br>";
	var_dump($retornoDatos->retornarJson());

 ?>