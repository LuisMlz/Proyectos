<a href="index.php"> Inicio</a> <br>

<?php


$hoyDia = 4;
$hoyMes = 9;
$hoyAnho = 2020;

$fechaNaciDia = 4;
$fechaNaciMes = 9;
$fechaNaciAnio = 2019;

#En caso de que sea incorrecta mandar un mensaje


#Este IF valida que el dia no pueda ser mayor a 31 
#Tambien valida que el mes no sea mayor a 12 de lo contrario
#marcara un mensaje de error
if($hoyDia >= 32 || $hoyMes >= 13){

    echo "Error en la fecha";
}

else {

#Este IF valida varias condiciones primero que el dia  
#sea mayor o igual que la fecha de nacimiento a su vez
#que el mes sea mayor o igual al mes de nacimiento.
#al hacer las validaciones nos mostrara la edad
#de lo contrario que aun no se llegue su cumpleaños nos mostrara
#la edad que se tiene antes de cumplir años

    if($hoyDia >= $fechaNaciDia && $hoyMes >= $fechaNaciMes 
      && $hoyMes <= $fechaNaciMes && $hoyDia <= $fechaNaciDia ){

        $edad = $hoyAnho - $fechaNaciAnio;
        echo "Tu edad es: ",$edad;
    }

    else{

        $edad = $hoyAnho - $fechaNaciAnio;
        echo "Tu edad es: ", $edad -1;
    }

}

?>