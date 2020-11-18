<?php 
	

	//mi método
	class MiClase{

		//mis atributos
		public $resultado = 0;


		//mis métodos

		public function sumar($v1, $v2){

			$this->resultado=$v1 + $v2;

			return $this->resultado;
		}
	}


	//instanciar clase
	$miClase = new MiClase();

	echo $miClase->sumar(2,5);



 ?>