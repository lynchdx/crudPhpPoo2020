<?php 
  
  //Propiedades estaticas, son aquellas que no necesitan de una instancea para poder ser llamadas, sino, se pueden llamar
  // de cualquier parte.

/*
$prueba = new Prueba();
 
  echo "Acceder a la propiedad de una clase: " . Prueba::$propiedad_estatica . "<br>";
  echo "Método de una clase instanciada: " . $prueba->get_variable(). "<br>";
  echo "Propiedad de una clase instanciada: <br>" . $prueba->propiedad_estatica . "<br>";
  echo "Ejemplo método estático: <br>" . Prueba::hola_mundo();
  
  
  class Prueba
  {
    static $propiedad_estatica = "Soy estático";
 
    function get_variable()
    {
       return self::$propiedad_estatica;
    }
  
  static function hola_mundo()
  {
    return 'Hola mundo!'; 
  }
 
  }
*/


  class MiClase{

      public $mensaje = 'hola';

      public static function metodo(){

          return 1;

      }
  }


  echo MiClase::metodo(); 



 ?>