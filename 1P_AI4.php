<a href="index.php"> Inicio</a> <br>


<?php
echo "<strong>For</strong><br>";

for($i=0; $i<5; $i++){
    echo " $i <br>";
}


#-------------------------------------------------------
echo "<strong>While</strong><br>";

$ciclo = 5;
while($ciclo > 0){
    $ciclo--;
    echo "$ciclo <br>";
}

#-------------------------------------------------------
echo "<strong>Do While</strong><br>";

$ciclo = 10;

do{
    $ciclo--;
    echo "$ciclo <br>";
}
while($ciclo > 0);

#-------------------------------------------------------
echo "<strong>Arrays</strong><br>";

$arrays = [1,2,3,4,5,6];
$arrayNuevo = [];
array_push($arrayNuevo, 1);
array_push($arrayNuevo, 2);

echo var_dump($arrayNuevo) . "<br>";

#-------------------------------------------------------
echo "<strong>Arrays</strong><br>";

array_unshift($arrayNuevo, 3);
echo var_dump($arrayNuevo) . "<br>";

#-------------------------------------------------------
echo "<strong>Eliminar elemento</strong><br>";

unset($arrayNuevo[2]);
echo var_dump($arrayNuevo) . "<br>";

#-------------------------------------------------------
echo "<strong>Contar elemento</strong><br>";

echo count($arrayNuevo) . "<br>";

#-------------------------------------------------------
echo "<strong>Merge de arrays</strong><br>";
$arr1 = [1,2,3];
$arr2 = [2,3,4,5];

$arrMerge = array_merge($arr1,$arr2);
echo var_dump($arrMerge) . "<br>";

#-------------------------------------------------------
echo "<strong>Voltear los arrays</strong><br>";

$arrMerge = array_reverse($arrMerge);
echo var_dump($arrMerge) . "<br>";

#-------------------------------------------------------
echo "<strong>Merge sin repetidos</strong><br>";

$arrMerge = array_replace($arr1, $arr2);
echo var_dump($arrMerge) . "<br>";

#-------------------------------------------------------
echo "<strong>Ordenar Ascendentemente</strong><br>";
sort($arrMerge);
echo var_dump($arrMerge) . "<br>";

#-------------------------------------------------------
echo "<strong>Ordenar Descendentemente</strong><br>";
rsort($arrMerge);
echo var_dump($arrMerge) . "<br>";



#-------------------------------------------------------
echo "<strong>Foreach</strong><br>";

$numeros = [1,2,3,4,["a", "b", "c"]];
foreach($numeros as $item){

if(is_array($item)){

foreach($item as $subitem){
    echo "---$subitem <br>";
}

}else{
    echo "$item <br>";
}
    
}

#-------------------------------------------------------
echo "<strong>Arreglo simple</strong><br>";
echo "$numeros[2] <br>";

#-------------------------------------------------------
echo "<strong>Arreglo asociativos</strong><br>";
$asociativo = ["Nombre" => "Luis", "Edad" => 26 ];
echo $asociativo ["Nombre"] . "<br>";

#-------------------------------------------------------
echo "<strong>Arreglos asociativos foreach</strong><br>";
foreach($asociativo as $valor){
    echo "$valor <br>";
}

#-------------------------------------------------------
echo "<strong>Arreglos asociativos foreach 2</strong><br>";
foreach($asociativo as $key => $valor){
    echo "$key - $valor <br>";
}
?>