<a href="index.php">Inicio</a> <br><br> <?php

// Declaración de una función
function imprimirSalto(){
echo "<strong>Impresión desde función</strong>";
echo "<br><hr>";

}

imprimirSalto();
//---------------------------------
function imprimirTitulo($titulo){
    echo "<strong>$titulo</strong>";
    echo "<br><hr>";
    
    }
    
    imprimirTitulo("Impreso pasando parámetros");


//-----------------------------------

function getTitulo($titulo){
    return "<strong>$titulo</strong> <br><hr>";
    
    }
    
    $html = getTitulo("Impreso pasando parámetros ");
    echo $html;

//---------------------------------

function getTituloImprimir($titulo){
        echo "Previo al titulo<br>";
        return "<strong>$titulo</strong> <br><hr>";
        
        }
        
        $html = getTituloImprimir("Imprimir y regresar valor ");
        echo $html;

          //---------------------------------

function getTituloDefault($titulo = "Titulo por defecto"){
      
        return "<strong>$titulo</strong> <br><hr>";
        
        }
        
        $html = getTituloDefault("Titulo pasado a la función ");
        echo $html;

$numero = 1;

imprimirTitulo("pasar por valor");
function sumaUno($numeroEntrada){
    $numeroEntrada++;
}

sumaUno($numero);
echo $numero . "<br>";



imprimirTitulo("pasar por referencia");
function sumaUnoPorReferencia(&$numeroEntrada){
    $numeroEntrada++;
}

sumaUnoPorReferencia($numero);
echo $numero;


