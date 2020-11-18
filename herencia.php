<?php 

	class PadreClass{

		public function metodoPadre(){
			return "soy el padre";
		}		
		public function metodoCompartido(){
			return "Método compartido desde el padre";
		}
	}


	//la herencia obtiene todas las propiedades de una clase a otra. por "extends"
	class HijoClass extends PadreClass{

		public function metodoHijo(){
			return parent::metodoCompartido();
			//return self::metodoCompartido();
			//return parent::metodoCompartido();

			//dos métodos con el mismo nombre, uno del padre, otro del hijo.
			//Si se pone self, llamas al método de tu propia clase sin extends, si ponesr parent, llamas el del padre.
		}

		public function metodoCompartido(){
			return "Método compartido desde el hijo";
		}

	}

	/*
	//Esto funciona bien, pero se puede hacer aún más fácil

	$hijoClass = new HijoClass();
	echo $hijoClass->metodoPadre(); 
	*/

	/*
	1-. Se crea una clase padre con un método return dentro.
	2-. Se crea clase hijo extends del padre
	3-. Fuera de las 2 clases, se instancea objeto de clase hijo con echo de clase padre que fue extendida.

	*/

	/*echo Clase que hereda, llamo el método del padre*/
	echo HijoClass::metodoHijo();




 ?>