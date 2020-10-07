
<?php

/* a) Conversión del valor. Desde un formulario se debe indicar la 
medida de origen y la medida de destino, por ejemplo: cm a m. 
Al presionar el botón de enviar deberá mostrar en pantalla la conversión 
correspondiente. Por ejemplo si se indica convertir de gr a Kg y se coloca 
en el campo un valor de 1000gr, deberá indicar como resultado 1Kg. De igual 
forma si se indican 1Kg convertir a gr deberá indicar como resultado 1000gr.
b) Conversión errónea. Si desde el formulario se indican conversiones que 
no corresponden como lts a cm deberá indicar en pantalla 
"Las medidas no son compatibles"
c) Los valores de conversión son los siguientes: 
distancia: centímetro, metro, pulgada, yarda
peso: gramo, kilogramo, onza
volumen líquido: litros, mililitros, metro cúbico */

class ConversorController{


public $origen;
public $destino;
public $accion;
public $accion2;
public $mensaje;
public $unidades;

function __construct(){

    $this ->origen = 0;
    $this ->destino = 0;
    $this->accion = "";
    $this->accion2= "";
    $this->mensaje= "";
    $this->unidadOrigen="";
    $this->unidadDestino="";
}

function parametros(){

    if(isset($_POST["origen"])){
        $this->origen = $_POST["origen"];
    }

    if(isset($_POST["destino"])){
        $this->destino = $_POST["destino"];
    }

    if(isset($_POST["accion"])){
        $this->accion = $_POST["accion"];
    }

    if(isset($_POST["accion2"])){
        $this->accion2 = $_POST["accion2"];
    }

    if(isset($_POST["mensaje"])){
        $this->mensaje = $_POST["mensaje"];
    }

    if(isset($_POST["unidadOrigen"])){
        $this->unidadOrigen = $_POST["unidadOrigen"];
    }

    if(isset($_POST["unidadDestino"])){
        $this->unidadDestino = $_POST["unidadDestino"];
    }
}

public function operaciones(){

    switch($this->accion){
        case "1": $this->centimetros(); break;
        case "2": $this->metros(); break;
        case "3": $this->pulgadas(); break;
        case "4": $this->yarda(); break;
        case "5": $this->gramo(); break; 
        case "6": $this->kilo(); break;
        case "7": $this->onza(); break; 
        case "8": $this->litros(); break; 
        case "9": $this->mililitros(); break; 
        case "10": $this->metroCubico(); break;  
        case "reset": $this->reset(); break; 
        default: break;
    }


}  



   private function centimetros(){

    
    if($this->accion==1 && $this->accion2==1){
        $this->destino = $this->origen / 1;
        $this->unidadOrigen ="cm";
        $this->unidadDestino ="cm";
        
    }

    else if($this->accion==1 && $this->accion2==2){
        $this->destino = $this->origen / 100; 
        $this->unidadOrigen ="cm";
        $this->unidadDestino ="m";
    }

    else if($this->accion==1 && $this->accion2==3){
        $this->destino = $this->origen * 0.393701 ;
        $this->unidadOrigen ="cm";
        $this->unidadDestino ="inch";
    }

    else if($this->accion==1 && $this->accion2==4){
        $this->destino = $this->origen * 0.010936;
        $this->unidadOrigen ="cm";
        $this->unidadDestino ="yd";
    }

    else if($this->accion==1 && $this->accion2 >= 5 ){
        $this->origen = 0;
        $this->accion = "";
        $this->destino = 0;
        $this->unidadOrigen="";
        $this->unidadDestino="";
        $this->mensaje = "Las medidas no son compatibles";
        
    }
 
   }

   private function metros(){

    if($this->accion==2 && $this->accion2==2){
        $this->destino = $this->origen * 1;
        $this->unidadOrigen ="m";
        $this->unidadDestino ="m";
    }


    else if($this->accion==2 && $this->accion2==1){
        $this->destino = $this->origen * 100;
        $this->unidadOrigen ="m";
        $this->unidadDestino ="cm";
    }

    else if($this->accion==2 && $this->accion2==3){
        $this->destino = $this->origen * 39.3701 ;
        $this->unidadOrigen ="m";
        $this->unidadDestino ="inch";
    }

    else if($this->accion==2 && $this->accion2==4){
        $this->destino = $this->origen / 0.9144 ;
        $this->unidadOrigen ="m";
        $this->unidadDestino ="yd";
    }

    else if($this->accion==2 && $this->accion2 >= 5 ){
        $this->origen = 0;
        $this->accion = "";
        $this->destino = 0;
        $this->unidadOrigen="";
        $this->unidadDestino="";
        $this->mensaje = "Las medidas no son compatibles";
        
    }

   }
    private function pulgadas(){

        if($this->accion==3 && $this->accion2==3){
            $this->destino = $this->origen * 1;
            $this->unidadOrigen ="inch";
            $this->unidadDestino ="inch";
        }
    
    
        else if($this->accion==3 && $this->accion2==1){
            $this->destino = $this->origen * 2.54;
            $this->unidadOrigen ="inch";
            $this->unidadDestino ="cm";
        }
    
        else if($this->accion==3 && $this->accion2==2){
            $this->destino = $this->origen * 0.02540 ;
            $this->unidadOrigen ="inch";
            $this->unidadDestino ="m";
        }
    
        else if($this->accion==3 && $this->accion2==4){
            $this->destino = $this->origen * 0.0277778 ;
            $this->unidadOrigen ="inch";
            $this->unidadDestino ="yd";
        }

        else if($this->accion==3 && $this->accion2 >= 5 ){
            $this->origen = 0;
            $this->accion = "";
            $this->destino = 0;
            $this->unidadOrigen="";
            $this->unidadDestino="";
            $this->mensaje = "Las medidas no son compatibles";
            
        }
    
 
   }

   private function yarda(){

    if($this->accion==4 && $this->accion2==4){
        $this->destino = $this->origen * 1;
        $this->unidadOrigen ="yd";
        $this->unidadDestino ="yd";
    }


    if($this->accion==4 && $this->accion2==1){
        $this->destino = $this->origen * 91.44;
        $this->unidadOrigen ="yd";
        $this->unidadDestino ="cm";
    }

    else if($this->accion==4 && $this->accion2==2){
        $this->destino = $this->origen * 0.9144 ;
        $this->unidadOrigen ="yd";
        $this->unidadDestino ="m";
    }

    else if($this->accion==4 && $this->accion2==3){
        $this->destino = $this->origen * 36 ;
        $this->unidadOrigen ="yd";
        $this->unidadDestino ="inch";
    }

    else if($this->accion==4 && $this->accion2 >= 5 ){
        $this->origen = 0;
        $this->accion = "";
        $this->destino = 0;
        $this->unidadOrigen="";
        $this->unidadDestino="";
        $this->mensaje = "Las medidas no son compatibles";
        
    }

    }

    private function gramo(){

        if($this->accion==5 && $this->accion2==5){
            $this->destino = $this->origen * 1;
            $this->unidadOrigen ="gr";
            $this->unidadDestino ="gr";
        }
    
    
        if($this->accion==5 && $this->accion2==6){
            $this->destino = $this->origen * 0.001;
            $this->unidadOrigen ="gr";
            $this->unidadDestino ="kg";
        }
    
        else if($this->accion==5 && $this->accion2==7){
            $this->destino = $this->origen * 0.035274 ;
            $this->unidadOrigen ="gr";
            $this->unidadDestino ="oz";
        }

        else if($this->accion==5 && $this->accion2 <= 4 ||
         $this->accion==5 && $this->accion2 >= 8){
            $this->origen = 0;
            $this->accion = "";
            $this->destino = 0;
            $this->unidadOrigen="";
            $this->unidadDestino="";
            $this->mensaje = "Las medidas no son compatibles";
            
        }
    
    }

    
    private function kilo(){

        if($this->accion==6 && $this->accion2==6){
            $this->destino = $this->origen * 1;
            $this->unidadOrigen ="kg";
            $this->unidadDestino ="kg";
        }
    
    
        if($this->accion==6 && $this->accion2==5){
            $this->destino = $this->origen * 1000;
            $this->unidadOrigen ="kg";
            $this->unidadDestino ="gr";
        }
    
        else if($this->accion==6 && $this->accion2==7){
            $this->destino = $this->origen * 35.274 ;
            $this->unidadOrigen ="kg";
            $this->unidadDestino ="oz";
        }

        else if($this->accion==6 && $this->accion2 <= 4 ||
        $this->accion==6 && $this->accion2 >= 8){
           $this->origen = 0;
           $this->accion = "";
           $this->destino = 0;
           $this->unidadOrigen="";
           $this->unidadDestino="";
           $this->mensaje = "Las medidas no son compatibles";
           
       }
    
    }

    private function onza(){

        if($this->accion==7 && $this->accion2==7){
            $this->destino = $this->origen * 1;
            $this->unidadOrigen ="oz";
            $this->unidadDestino ="oz";
        }
    
    
        if($this->accion==7 && $this->accion2==5){
            $this->destino = $this->origen * 28.3495;
            $this->unidadOrigen ="oz";
            $this->unidadDestino ="gr";
        }
    
        else if($this->accion==7 && $this->accion2==6){
            $this->destino = $this->origen * 0.0283495 ;
            $this->unidadOrigen ="oz";
            $this->unidadDestino ="kg";
        }

        else if($this->accion==7 && $this->accion2 <= 4 ||
        $this->accion==7 && $this->accion2 >= 8){
           $this->origen = 0;
           $this->accion = "";
           $this->destino = 0;
           $this->unidadOrigen="";
           $this->unidadDestino="";
           $this->mensaje = "Las medidas no son compatibles";
           
       }
    
    }

    private function litros(){

        if($this->accion==8 && $this->accion2==8){
            $this->destino = $this->origen * 1;
            $this->unidadOrigen ="l";
            $this->unidadDestino ="l";
        }
    
    
        if($this->accion==8 && $this->accion2==9){
            $this->destino = $this->origen * 1000;
            $this->unidadOrigen ="l";
            $this->unidadDestino ="ml";
        }
    
        else if($this->accion==8 && $this->accion2==10){
            $this->destino = $this->origen * 0.001 ;
            $this->unidadOrigen ="l";
            $this->unidadDestino ="m3";
        }

        else if($this->accion==8 && $this->accion2 <= 7 ){
            $this->origen = 0;
            $this->accion = "";
            $this->destino = 0;
            $this->unidadOrigen="";
            $this->unidadDestino="";
            $this->mensaje = "Las medidas no son compatibles";
            
        }
    
    }

    private function mililitros(){

        if($this->accion==9 && $this->accion2==9){
            $this->destino = $this->origen * 1;
            $this->unidadOrigen ="ml";
            $this->unidadDestino ="ml";
        }
    
    
        if($this->accion==9 && $this->accion2==8){
            $this->destino = $this->origen / 1000;
            $this->unidadOrigen ="ml";
            $this->unidadDestino ="l";
        }
    
        else if($this->accion==9 && $this->accion2==10){
            $this->destino = $this->origen / 1000000 ;
            $this->unidadOrigen ="ml";
            $this->unidadDestino ="m3";
        }

        else if($this->accion==9 && $this->accion2 <= 7 ){
            $this->origen = 0;
            $this->accion = "";
            $this->destino = 0;
            $this->unidadOrigen="";
            $this->unidadDestino="";
            $this->mensaje = "Las medidas no son compatibles";
            
        }
    
    }

    private function metroCubico(){

        if($this->accion==10 && $this->accion2==10){
            $this->destino = $this->origen * 1;
            $this->unidadOrigen ="m3";
            $this->unidadDestino ="m3";
        }
    
    
        if($this->accion==10 && $this->accion2==8){
            $this->destino = $this->origen / 0.0010000;
            $this->unidadOrigen ="m3";
            $this->unidadDestino ="l";
        }
    
        else if($this->accion==10 && $this->accion2==9){
            $this->destino = $this->origen * 1000000 ;
            $this->unidadOrigen ="m3";
            $this->unidadDestino ="ml";
        }

        else if($this->accion==10 && $this->accion2 <= 7 ){
            $this->origen = 0;
            $this->accion = "";
            $this->destino = 0;
            $this->unidadOrigen="";
            $this->unidadDestino="";
            $this->mensaje = "Las medidas no son compatibles";
            
        }
    
    }


   private function reset(){

    $this->origen = 0;
    $this->accion = "";
    $this->destino = 0;
    $this->mensaje = "";
    $this->unidadOrigen="";
    $this->unidadDestino="";
    
}


}


?>