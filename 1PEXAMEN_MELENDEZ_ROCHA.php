<?php 

$segundos = 60;
$minutos = 60;
$horas = 24;


for($i=0; $i<$segundos; $i++){
    
    if($i <= 9){

             echo "0$i <br>"; 

    } else{

        echo "$i <br>"; 
        
    }

    for($j=0; $j<$minutos; $j++){

        if($j <= 9){
            echo "0$j <br>"; 
        }

        else{
            
        }
    }

    for($h=0; $h<$horas; $j++){

        if($h <= 9){
            echo "0$h <br>"; 
        }

        else{
            
        }
    }

} 


?>