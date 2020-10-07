<a href="index.php">Inicio</a> <br><br> <?php

include('1P_AI7_functions.php');
include_once('1P_AI7_functions.php');

imprimirSalto();

imprimirTitulo("Impreso pasando parámetros");


$html = getTitulo("Impreso pasando parámetros ");
echo $html;

        
$html = getTituloImprimir("Imprimir y regresar valor ");
echo $html;

     
$html = getTituloDefault("Titulo pasado a la función ");
echo $html;

$numero = 1;

imprimirTitulo("pasar por valor");


sumaUno($numero);
echo $numero . "<br>";

imprimirTitulo("pasar por referencia");

sumaUnoPorReferencia($numero);
echo $numero;


