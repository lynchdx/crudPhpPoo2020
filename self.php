<?php 

	class ColorClass{

		public function retornarColor($num){

			if ($num==1) {
				return "rojo";
			}else if($num==2){
				return "azul";
			}else if($num==3){
				return "amarillo";
			}

		}


		public function usarRetornarColor($tipoColor){
			/*$colorClass = new ColorClass();
			return $colorClass->retornarColor($tipoColor);*/
			
			//es lo mismo, pero al usar self 
			return self::retornarColor($tipoColor);

		}

	}

		$colorClass = new ColorClass();
		echo $colorClass->usarRetornarColor(2);

 ?>