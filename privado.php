<?php 

	class Clase1{
		
		private function saludar(){
			return "saludando :)";	
		}





		public function mandarSaludo(){
			return self::saludar();
		}

	}

	echo Clase1::mandarSaludo();

	/*Para llamar un método privado; se necesita crear ot´ro método que haga un self del método privado y llamar a ese método privado*/


 ?>