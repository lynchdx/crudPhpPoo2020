<?php 

	class PadreClass{

		protected function metodo1(){

			return "método protegido";
		}
	}


	class HijaClass extends PadreClass{
		public function mostrarMetodo1(){
			return parent::metodo1();
		}
	}

	$hijaClass = new HijaClass();
		echo $hijaClass->mostrarMetodo1();

	
	/*
	1-. Crear clase Padre, con método protected el cual retorna un String.
	2-. Crear Clase hija que extiende del padre con un método que retorna parent::(metodo del padre)
	3-. Instanciar hija, llamando método de la hija.

	*/






 ?>