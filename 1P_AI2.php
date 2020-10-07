<a href="index.php"> Inicio</a> <br>

<?php

#cualquier nuemro diferente a 0, string, true no vacio y
#cualquier valor que sea diferente de null es verdadero

if(1 == 1){

    print "Verdadero <br>";
}else{
    print "Falso <br>";
}

if(1 == 1 && 1 == 2){

    print "Verdadero <br>" ;
}else{
    print "Falso <br>";
}

if(1 == 1 || 1 == 2){

    print "Verdadero <br>";
}else{
    print "Falso <br>";
}

$variable = "1";

switch ($variable){
    
    case true: echo "Verdadero booleano"; break;
    case 1: echo "Verdadero numero"; break;
    case  1.234: echo "Verdadero decimal"; break;
    case "1": echo "Verdadero string"; break;
    default: echo "falso"; break;

} 



?>