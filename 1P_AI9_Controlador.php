
<?php

#include_once('1P_AI9_BDConnection.php');
#$conexion = new BDConnection();


#$conexion -> cierraConexion();

include_once('1P_AI9_Usuario.php');

//INSERTAR
#$mUsuario = new Usuario();
#$mUsuario->nombre = 'Luis';
#$mUsuario->edad = 26;
#$mUsuario->save();

//CONSULTAR

$mUsuario = Usuario::all();

//UPDATE
/*if(isset($mUsuario)){
    $mUsuario->nombre = "Manuel";
    $mUsuario->edad = 27; 
    $mUsuario->save();  

}

//DELETE
if(isset($mUsuario)){
    $mUsuario->delete();
}

*/
#echo var_dump($mUsuario); 