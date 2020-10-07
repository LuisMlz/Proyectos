<a href="index.php">Inicio</a> <br><br> <?php

include('1P_AI8_functions.php');
include('1P_AI8_Modelo.php');

titulo("Creación de un objeto");

$mPersona = new Persona();
$mPersona->nombre = "Eduardo";
$mPersona->edad = 30;


echo var_dump($mPersona);

echo "$mPersona->nombre tiene $mPersona->edad años";

$mPersona2 = new Persona();
$mPersona2->nombre = "Luis";
$mPersona2->edad = 26;

echo var_dump($mPersona2);

echo "$mPersona2->nombre tiene $mPersona2->edad años";
titulo("Creación de un arreglo de objetos");
$arrPersonas = ["persona1" => $mPersona, $mPersona2 ];

echo var_dump($arrPersonas);
salto();


titulo("impresión desde función");

$mPersona->saluda();
$mPersona2->saluda();
titulo("impresion retornando valor");
$saludo1 = $mPersona->getSaludo();
$saludo2 = $mPersona2->getSaludo();

echo $saludo1;
echo $saludo2;
salto();

titulo("Paso de parámetros");
$mPersona2->saluda();
$mPersona->responde( $mPersona2->nombre );


titulo("Paso de parametros y asignar variable");
$mPersona->preguntaEdad();
$mPersona2->respondeEdad( $mPersona->edad );

echo var_dump($mPersona2);
salto();

titulo("Paso de parametros por referencia");
$edadPersona = 0;
$mPersona->retornaEdad( $edadPersona );

echo $edadPersona;

salto();
titulo("Variables estáticas");
$mayoriaEdad = Persona::$mayoriaEdad;
echo $mayoriaEdad;

salto();
titulo("Funciones estáticas");
Persona::imprimeMensaje();

salto();
titulo("Funciones retornando estáticas");
$valor = Persona::retornaEstatico();
echo $valor;






