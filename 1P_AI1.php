
<a href="index.php">Inicio</a> <br><br>

<strong>Impresión desde HTML</strong><br>
1 + 2
<hr>

<?php

//-----------------------------------------------------------------------------------------------------
echo "<strong>Comentarios</strong><br>";
// Este es un comentario
// Otra línea de comentario
/*  */


$salto = "<hr>";

//-----------------------------------------------------------------------------------------------------
echo "<strong>Impresión desde PHP</strong><br>";

$variable = 1;
echo $variable;
echo $salto;

$variable = "hola";
Echo $variable;
echo "<br>";

$variable = true;
Echo $variable;
echo "<br>";

$variable = 3.1416;
Echo $variable;
echo $salto;

//-----------------------------------------------------------------------------------------------------
echo "<strong>Operaciones aritméticas</strong><br>";
echo 1 + 2;
echo "<br>";

echo 1 - 2;
echo "<br>";

echo 1 * 2;
echo "<br>";

echo 1 / 2;
echo "<br>";

echo 10%7;
echo $salto;

//-----------------------------------------------------------------------------------------------------
echo "<strong>Impresión desde doble comilla</strong><br>";
$variable1 = 3.1416;
$variable2 = " es el valor de PI";
echo "$variable1$variable2 <br>"; 

$variable3 = 2;
echo "$variable1*$variable3 $salto"; 

//-----------------------------------------------------------------------------------------------------
echo "<strong>Concatenación/Suma de cadenas</strong><br>";
echo $variable1.$variable3;
echo "<br>";

echo $variable1+$variable3;
echo "<br>";

$variable4 = "2";

echo $variable3*$variable4;
echo "<br>";

echo $variable3.$variable4;
echo $salto;

//-----------------------------------------------------------------------------------------------------
echo "<strong>Conversión del tipo y verificación de variables</strong><br>";

// intval();   
// boolval();  
// floatval();
// strval();
$variable5 = "";
echo var_dump($variable5);

$filtro1 = "mi valor";

if ( isset($filtro1) ) {
    echo "Si esta declarada";
}  else {
    echo "No está declarada";
} 

// is_bool()
// is_null()
// is_float()
// is_int()
// is_string()
// is_object()
// is_array() 

