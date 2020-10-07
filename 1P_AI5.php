<a href="index.php"> Inicio</a> <br>


<?php
echo "<strong>Ejercicio For</strong><br>";

#-------------------------------------------
echo "<strong>Descendente</strong><br>";

$Numeros = [];
$renglon = "";
for($i=1; $i<6; $i++){
    $renglon .= $i;
    array_push($Numeros, $renglon);
    echo " $renglon <br>";

}


#-----------------------------------------------
echo "<strong>Invertido</strong><br>";

$Numeros = array_reverse($Numeros);

foreach($Numeros as $item){
    echo "$item <br>";
}

#-----------------------------------------------
echo "<strong>Calendario</strong><br>";
$calendario = [
"Enero" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31", 
"Febrero" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19.20.21.22.23.24.25.26.27.28", 
"Marzo" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31",
"Abril" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30", 
"Mayo" =>"1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31", 
"Junio" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30",
"Julio" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31", 
"Agosto" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31", 
"Septiembre" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30", 
"Octubre" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31",
"Noviembre" => "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30", 
"Diciembre" =>"1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31"];

foreach($calendario as $meses => $valor){
    echo "$meses : $valor <br>";
}

#-----------------------------------------------
echo "<strong>Piramide Dinamica</strong><br>";

$num =10;
$nums = [];
$progresivo = [];

for($i=1; $i<$num; $i++){

    array_push($progresivo, $i);
  if($i > 1){
    array_unshift($progresivo, $i); 
  }
    array_push($nums, $progresivo);
}


foreach($nums as $item){

    $espacio = (count($progresivo) - count($item)) / 2;

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    foreach($item as $valor){
        echo "$valor";
    }

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    echo "<br>";
}

#-----------------------------------------------
echo "<strong>Piramide en Rombo </strong><br>";

$num =10;
$nums = [];
$progresivo = [];

for($i=1; $i<$num; $i++){

    array_push($progresivo, $i);
  if($i > 1){
    array_unshift($progresivo, $i); 
  }
    array_push($nums, $progresivo);
}


foreach($nums as $item){

    $espacio = (count($progresivo) - count($item)) / 2;

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    foreach($item as $valor){
        echo "$valor";
    }

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }
    
    echo "<br>";
}

$nums = array_reverse($nums);

foreach($nums as $item){
    

    $espacio = (count($progresivo) - count($item)) / 2;

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    foreach($item as $valor){
        echo "$valor";
    }

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }
    
    echo "<br>";
}


?>