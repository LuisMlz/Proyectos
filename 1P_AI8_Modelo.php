<?php

class Persona{
    public $nombre;
    public $edad;
    public static $mayoriaEdad = 18;

    public function saluda(){
        echo "Hola, me llamo $this->nombre <br>";
    }

    public function getSaludo(){
        echo "Hola, me llamo $this->nombre <br>";
    }

    public function responde($nombreInterlocutor){
        echo "Mucho gusto $nombreInterlocutor, yo me llamo $this->nombre <br>";
    }

    public function preguntaEdad(){
        $edadInterlocutor = $this->edad + 5;
        echo "Tengo  $this->edad años. 
        Tu pareces de $edadInterlocutor  <br>";
    }
    public function respondeEdad($edadInterlocutor){
         $this->edad = $edadInterlocutor  + 5;
        echo "Tengo  $this->edad <br>";
    }

    public function retornaEdad(&$edadEntrada){
        $edadEntrada = $this->edad ;
   }

    public static function imprimeMensaje(){
        echo "Mensaje desde función estática";

    }

    public static function retornaEstatico(){
        return self::$mayoriaEdad;
    }
   


}