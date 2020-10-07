<?php 


class CalculadoraController{

public $entrada;
public $accion;
public $resultado;
public $pantalla;


function __construct(){

    $this->entrada = 0;
    $this->accion = "";
    $this->resultado = 0;
    $this->pantalla = "0";

}

function parametros(){

    if(isset($_POST["entrada"])){
        $this->entrada = $_POST["entrada"];
    }

    if(isset($_POST["pantalla"])){
        $this->pantalla = $_POST["pantalla"];
    }

    if(isset($_POST["resultado"])){
        $this->resultado = $_POST["resultado"];
    }

    if(isset($_POST["accion"])){
        $this->accion = $_POST["accion"];
    }
}

public function operaciones(){

    switch($this->accion){
        case "suma": $this->suma(); break;
        case "resta": $this->resta();break;
        case "multiplica": $this->multiplica(); break;
        case "division": $this->division(); break;
        case "reset": $this->reset(); break;
        default: break;
    }


}

private function suma(){
 $this->pantalla.= " + " . $this->entrada;
 $this->resultado+= $this->entrada;
}

private function resta(){
    $this->pantalla.= " - " . $this->entrada;
 $this->resultado-= $this->entrada;
}
private function multiplica(){
    $this->pantalla.= " * " . $this->entrada;
 $this->resultado*= $this->entrada;
    
}
private function division(){
    $this->pantalla.= " / " . $this->entrada;
    $this->resultado/= $this->entrada;
}

private function reset(){

    $this->entrada = 0;
    $this->accion = "";
    $this->resultado = 0;
    $this->pantalla = "0";
    
}


}
















?>