<?php

// Declaración de una función
function imprimirSalto(){
echo "<strong>Impresión desde función</strong>";
echo "<br><hr>";

}
//---------------------------------
function imprimirTitulo($titulo){
    echo "<strong>$titulo</strong>";
    echo "<br><hr>";
    
    }
//-----------------------------------

function getTitulo($titulo){
    return "<strong>$titulo</strong> <br><hr>";
    
    }


//---------------------------------
function getTituloImprimir($titulo){
        echo "Previo al titulo<br>";
        return "<strong>$titulo</strong> <br><hr>";
        
        }
          //---------------------------------
function getTituloDefault($titulo = "Titulo por defecto"){
      
        return "<strong>$titulo</strong> <br><hr>";
        
        }
        
function sumaUno($numeroEntrada){
    $numeroEntrada++;
}

function sumaUnoPorReferencia(&$numeroEntrada){
    $numeroEntrada++;
}


