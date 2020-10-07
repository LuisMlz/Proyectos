<?php  

//Comentario
/* Bloque de comentario */
#Comentario


#Print imprime una cadena seguida
print "Hola";

#echo se puede separar por comas
echo "Hola","Mundo";

#Se puede usar etiquetas html
echo "<h1>Hola Mundo</h1>"; 

$nombre = "Luis";
echo "Mi nombre es:", $nombre, "<br>"; 

$num1 = 2;
$num2 = 3;

echo "el resultado es: ", $num1+$num2, "<br>";

#Constantes
define('IVA', 0.16);
echo IVA, "<br>";

#Bases
$octal = 0226; //150
$hexadecimal = 0xC4E; //3150
$Binario = 0b1010; //10

echo $octal, " ", $hexadecimal, " ", $Binario, "<br>";

#Saber el tipo de dato y valor
echo gettype($nombre); 
var_dump($octal);

#Por referencia
$antigua = "Hola";
$nueva = &$antigua;

$antigua= "Ejemplo nuevo";
echo $nueva;
?>